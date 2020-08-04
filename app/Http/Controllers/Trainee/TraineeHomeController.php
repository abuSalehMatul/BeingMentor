<?php

namespace App\Http\Controllers\Trainee;

use Illuminate\Http\Request;
use App\Http\Controllers\Trainee\TraineeController;
use App\Model\Question;
use App\Model\Tag;
use App\Model\Ticket;
use Carbon\Carbon;
use App\Model\Trainee;
use App\Helper;
use Session;

class TraineeHomeController extends TraineeController
{
    private $traineeModel;

    public function __construct(Trainee $traineeModel)
    {
        $this->traineeModel = $traineeModel;
    }
    public function index()
    {
        return view('panels.home');
    }

    public function ask()
    {
        
        $inquires = [
            'School', 'College', 'University', 'Non-profit', 'Academic', 'Others',
            'Freelance', 'IT', 'Business', 'Health', 'Engineering', 'Medicine',
            'Law'
        ];
        $tags = Tag::get()->pluck('tag')->toArray();
        return view('ask')->with('tags', $tags)->with('inquires', $inquires);
    }

    public function saveQuestion(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'inquire' => 'required',
            'tag' => 'required',
            'title' => 'required'
        ]);
        $message = Helper::packageActivity('questions');
        if($message != 'procced'){
            Session::flash('package-message', $message);
            return redirect('only-package');
        }
        $ticket = Ticket::setTicket($request->title, $request->inquire, '', 'forum');
        $question = new Question;
        $question->user_id = auth()->id();
        $question->title = $request->title;
        $question->question = $request->question;
        $question->tag = $request->tag;
        $question->ticket_id = $ticket->id;
        $question->save();
      
        return redirect()->route('forum');
    }

    public function question()
    {
        return view('panels.forum')->with('user', 'trainee');
    }

    private function formatDate(string $fromDate, string $toDate)
    {
        $formatedDates['fromDate'] = Carbon::parse($fromDate);
        $formatedDates['toDate'] = Carbon::parse($toDate);
        if ($formatedDates['toDate']->greaterThan(Carbon::today())) {
            $formatedDates['toDate'] = Carbon::today();
        }
        return $formatedDates;
    }

    public function getTrainees(Request $request, $userId)
    {
        $dates = $this->formatDate($request->fromDate, $request->toDate);
        $data = [];
        $data['trainees'] = $this->traineeModel::getTraineeByUserId($userId, $dates['fromDate'], $dates['toDate']);
        return $data;
    }

    public function message()
    {
        return view('panels.message')->with('userId', auth()->id());
    }

    public function findMentor()
    {
        return view('panels.findMentor')->with('user_id', 'front');
    }
}
