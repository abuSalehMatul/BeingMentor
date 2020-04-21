<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm(Request $request)
    {
        if ($request->session()->has('register_user_type')) {
            return view('auth.register');
        }
        else{
            return view('auth.choseForm');
        }

    }

    public function registerStepOne(Request $request)
    {
       Session::put('register_user_type', $request->user_type);
       if(isset($request->user_type)){
        return view('auth.register');
       }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function storeUser(Request $request)
    {

        $request->validate([
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|min:6',
            'password' => 'required|min:6',
            'address' => 'required|max:300',
            'title' => 'required'
        ]);

        $type = Session::get('register_user_type');
        $user = User::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'status' => $type == 'mentor' ? 0 : 1
        ]);

        if($type == 'mentor'){
            $user->assignRole('mentor');
            $user->mentor()->create([
                'description' => $request->description,
                'title' => $request->title,
                'barcode' => '#'. rand(1,1000000)
            ]);
            Auth::login($user);
            return auth()->user();
        }
        else{
            $user->assignRole('trainee');
            $user->trainee()->create([
                'description' => $request->description,
                'title' => $request->title,
            ]);
            Auth::login($user);
            return auth()->user();
        }
    }
}
