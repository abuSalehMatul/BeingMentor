<?php

namespace App\Http\Controllers;

use App\Model\Answer;
use App\Model\Mentor;
use App\Model\Question;
use App\Model\Rating;
use App\Model\Tag;
use App\Model\Ticket;
use App\Model\Vote;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ForumController extends Controller
{
    public function index(Request $request)
    {
        $tag = $request->get('tag');
        $inquiry = $request->get('inquire');
        $key = $request->get('key');
        if(!isset($key) && !isset($inquiry) && !isset($tag)){
            $questions = Question::orderBy('created_at', 'DESC')
            ->with(['answers.vote', 'user', 'ticket'])->paginate(10);
            return view('forum')->with('questions', $questions);
        }
        else{
            $questions = Question::orderBy('created_at', 'DESC')
            ->where(function ($query) use ($tag) {
                if ($tag != 'anytag') {
                    return $query->where('tag', 'like', '%' . $tag . '%');
                }
            })
            ->with(['answers.vote', 'user', 'ticket'])
            ->whereHas('ticket', function ($query) use ($inquiry) {
                if ($inquiry != 'allcategory') {
                    $query->where('inquire', $inquiry);
                }
            })
            ->paginate(10);
           // return $questions;
            return view('forum')->with('questions', $questions);
        }
    }

    public function showQuestion($questionId)
    {
        $question = Question::where('id',$questionId)->with(['answers.vote', 'user','ticket'])->first();
        views($question)->record();
        return view('singleForum')->with('question', $question);
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

    public function getForum(Request $request, $user)
    {
        $dates = $this->formatDate($request->fromDate, $request->toDate);
        $forums = Question::getQuestions($dates['fromDate'], $dates['toDate'], $user, $request->tag ?? '');
        return $forums;
    }

    public function getTags()
    {
        return Tag::get()->pluck('tag')->toArray();
    }

    public function getTagsForRegister(Request $request)
    {
        $data = [];
        if($request->has('q')){
            $search = $request->q;
            $data = DB::table("tags")
            		->select("id","tag")
            		->where('tag','LIKE',"%$search%")
            		->get();
        }


        return response()->json($data);
    }

    public function saveAns(Request $request)
    {
        $request->validate([
            'question_id' => 'required',
            'answer' => 'required'
        ]);
        $answer = new Answer;
        $answer->answer = $request->answer;
        $answer->user_id = auth()->id();
        $answer->question_id = $request->question_id;
        $answer->save();
        return true;
    }

    public function markCorrect(Request $request)
    {
        $request->validate([
            'question_id' => 'required',
            'answer_id' => 'required'
        ]);
        $question = Question::findOrFail($request->question_id);
        if ($question->user_id != auth()->id()) {
            return 'You Can not perform this action, only questioner can do this';
        }
        $answer = Answer::findOrFail($request->answer_id);
        if ($answer->is_solver == 1) {
            return 'You already marked it correct !!';
        }
        $answer->is_solver = 1;
        $answer->save();

        $question->is_solved = 1;
        $question->save();

        $data =
            [
                'rateable_id' => $answer->user_id,
                'rateable_type' => 'App\User',
                'rating' => 5,
                'ticket_id' => $question->ticket_id
            ];
        $rating = Rating::saveRating($data);
        $ticket = Ticket::findOrFail($question->ticket_id);
        $ticket->status = 'solved';
        $ticket->save();
        Mentor::updateMentorsRating();
        return "You have marked the answer as correct !!";
    }

    public function giveVote(Request $request)
    {
        $request->validate([
            'question_id' => 'required',
            'answer_id' => 'required',
            'vote' => 'required'
        ]);
        $question = Question::findOrFail($request->question_id);
        $vote = Vote::where('answer_id', $request->answer_id)
            ->where('vote_giver', auth()->id())->first();
        if ($vote) {
            return 'You already voted for this answer';
        }
        $answer = Answer::findOrFail($request->answer_id);
        $vote = new Vote;
        $vote->vote_giver = auth()->id();
        $vote->vote = $request->vote;
        $vote->answer_id = $request->answer_id;
        $vote->save();

        $data =
            [
                'rateable_id' => $answer->user_id,
                'rateable_type' => 'App\User',
                'rating' => $request->vote == 1 ? 5 : -5,
                'ticket_id' => $question->ticket_id
            ];
        $rating = Rating::saveRating($data);
        Mentor::updateMentorsRating();
        return "You have voted the answer successfully!!";
    }

    public function changeQuestionStatus(Request $request)
    {
        $request->validate([
            'question_id' => 'required',
            'status' => 'required',
        ]);
        $question = Question::findOrFail($request->question_id);
        $question->status = $request->status;
        $question->save();
        return true;
    }
}
