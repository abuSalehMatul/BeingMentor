<?php

namespace App\Http\Controllers;

use App\Model\ContactUs;
use App\Model\Mentor;
use App\Model\Package;
use App\Model\SuccessStory;
use App\Model\Tag;
use App\Model\Ticket;
use App\Model\Trainee;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use App\Model\UserTag;
use App\Model\UserPackage;
use Symfony\Component\CssSelector\Node\FunctionNode;

class FrontEndController extends Controller
{

    use  HasRoles;

    public function mentor()
    {
        $userId = 'front';
        return view('mentor')->with('user_id', $userId);
    }

    public function paypalPage()
    {
        $lastUserPackage =  UserPackage::where('user_id', auth()->id())
            ->latest('created_at')->first();
        $lastPackage = Package::findOrFail($lastUserPackage->package_id);

        $activatedPackage  = UserPackage::where('user_id', auth()->id())
        ->where('is_active', 1)
        ->latest('created_at')->first();
        if($activatedPackage){
            $activePackage = Package::findOrFail($activatedPackage->package_id);
            if ($activePackage->price > $lastPackage->price) {
                return 'you are already in higher package';
            }
            else{
                return view('paypalPage')->with('package', $lastPackage);
            }
        }
        else{
            if($lastPackage->price == 0){
                $lastUserPackage->is_active = 1;
                $lastUserPackage->save();
                return redirect()->route('panels.trainee.index');
            }
            else{
                return view('paypalPage')->with('package', $lastPackage);
            }
        }
    }

    public function aboutUs()
    {
        $stories = SuccessStory::orderBy('created_at', 'DESC')
            ->limit(5)
            ->get();
        return view('aboutUs')->with('stories', $stories);
    }

    public function contactUs(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'email|required',
            'message' => 'required'
        ]);
        ContactUs::create($request->all());
        $request->session()->flash('status', 'Contact was successful!');
        return redirect()->back();
    }

    public function contact()
    {
        return view('contact_us');
    }

    public function story()
    {
        return view('success_story');
    }

    public function addSuccess()
    {
        return view('add_success');
    }

    public function getSuccessStory($user)
    {
        if ($user === 'front') {
            $stories = SuccessStory::where('status', 1)->orderBy('created_at', 'DESC')->get();
            return $stories;
        } else {
            $stories = SuccessStory::orderBy('created_at', 'DESC')->get();
            return $stories;
        }
    }

    public function saveStory(Request $request)
    {
        $request->validate([
            'story' => 'required'
        ]);
        $story = new SuccessStory;
        $story->story = $request->story;
        $story->user_id = auth()->id();
        $story->save();
        return redirect('/');
    }

    public function termPolicy()
    {
        return view('term_policy');
    }

    public function statistics()
    {
        $mentors = Mentor::count();
        $tickets = Ticket::count();
        $solved = Ticket::where('status', 'solved')->count();
        $users = User::get();
        $online = 0;
        foreach ($users as $user) {
            if ($user->isOnline()) {
                $online++;
            }
        }
        return [
            'mentors' => $mentors,
            'problems' => $tickets,
            'solved' => $solved,
            'online' => $online
        ];
    }
}
