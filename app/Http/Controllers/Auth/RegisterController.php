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
use App\Model\UserPackage;
use App\Model\UserTag;
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
        return view('auth.register');
    }

    public function registerStepOne(Request $request)
    {
        Session::put('register_user_type', $request->user_type);
        if (isset($request->user_type)) {
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
            'package' => 'required_if:user_type,Mentee|exists:packages,id',
            'itemName' => 'required_if:user_type,Mentor',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|min:6',
            'password' => 'required|min:6|confirmed',
            'title' => 'required|max:150',
            'user_type' => 'required',
            'package' => 'required_if:user_type,Mentee',
            'academic_certificate' => 'file',
            'description' => 'required|min:6',
            'sum' => 'required|confirmed'

        ]);
      

        $user = User::create([
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'password' => Hash::make($request->password),
            'address' => $request->address,
            'status' => 0
        ]);

        if ($request->hasFile('academic_certificate')) {
            $file = $request->file('academic_certificate');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = \public_path() . '/certificate/' . rand(100, 30000) . time() . '.' . $extension;
            $file->move('certificate/', $filename);
            User::where('id', $user->id)->update(['academic_certificate' => $filename]);
        }

        if ($request->user_type == 'Mentor') {
            $user->assignRole('mentor');
            $user->mentor()->create([
                'description' => $request->description,
                'title' => $request->title,
                'barcode' => '#' . rand(1, 1000000)
            ]);
            foreach($request->itemName as $tagId){
                $ifTagExist = UserTag::where('user_id', $user->id)
                ->where('tag_id', $tagId)->first();
                if(!$ifTagExist){
                    $userTag = new UserTag;
                    $userTag->user_id = $user->id;
                    $userTag->tag_id = $tagId;
                    $userTag->save();
                }
               
            }
            Auth::login($user);
            return redirect()->route('panels.mentor.index');
        } else {
            $user->assignRole('trainee');
            $user->trainee()->create([
                'description' => $request->description,
                'title' => $request->title,
            ]);
            Auth::login($user);
            $userPackage = new UserPackage();
            $userPackage->package_id = $request->package;
            $userPackage->user_id = $user->id;
            $userPackage->is_active = 0;
            $userPackage->save();
            return redirect()->route('panels.trainee.index');
        }
    }
}
