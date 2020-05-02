<?php

namespace App\Http\Controllers;

use App\Model\Chat;
use App\Model\ChatRoom;
use Illuminate\Http\Request;
use App\Model\Mentor;
use App\Model\Rating;
use App\Model\Ticket;
use App\Model\Visit;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function getUserBarChart()
    {
        $today = Carbon::tomorrow();
        $currentDay = $today->subDays(1);

        $data = [];
        $userId = auth()->id();
        for ($i = 0; $i < 30; $i++) {

            $sendCount = Chat::where('sender_id', $userId)
                ->whereDate('created_at', $currentDay)
                ->count();

            $receiveCount = Chat::where('receiver_id', $userId)
                ->whereDate('created_at', $currentDay)
                ->count();

            $data[] = [
                'date' => $currentDay->format('y-m-d'),
                'received' => $receiveCount,
                'sent' => $sendCount
            ];
            $currentDay = $currentDay->subDays(1);
        }
        return $data;
    }

    public function mentorOverView()
    {
        $myMessage = Chat::where('receiver_id', auth()->id())->count();
        $mentor = Mentor::where('user_id', auth()->id())->first();
        $rating = $mentor->rating;
        $solved = Rating::where('rateable_id', auth()->id())->count();
        return [
            'my_message' => $myMessage,
            'my_rating' => $rating,
            'my_solved' => $solved,
            'vote' => 0
        ];
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


    public function getInquires()
    {
        return config('enums.inquires');
    }

    public function adminTraineeMentor(Request $request)
    {
        $dates = $this->formatDate($request->fromDate, $request->toDate);
        $mentors = DB::table('mentors')
            ->whereDate('created_at', '>=', $dates['fromDate']->format('Y-m-d'))
            ->whereDate('created_at', '<=', $dates['toDate']->format('Y-m-d'))
            ->count();

        $trainee = DB::table('trainees')
            ->whereDate('created_at', '>=', $dates['fromDate']->format('Y-m-d'))
            ->whereDate('created_at', '<=', $dates['toDate']->format('Y-m-d'))
            ->count();

        $ticketSolve = DB::table('tickets')
            ->where('status', 'solved')
            ->whereDate('created_at', '>=', $dates['fromDate']->format('Y-m-d'))
            ->whereDate('created_at', '<=', $dates['toDate']->format('Y-m-d'))
            ->count();

        $ticketUnsolved = DB::table('tickets')
            ->where('status', '!=', 'solved')
            ->whereDate('created_at', '>=', $dates['fromDate']->format('Y-m-d'))
            ->whereDate('created_at', '<=', $dates['toDate']->format('Y-m-d'))
            ->count();

        return [
            'mentors' => $mentors,
            'trainees' => $trainee,
            'solved' => $ticketSolve,
            'unsolved' => $ticketUnsolved
        ];
    }

    public function getChatInquire(Request $request)
    {
        $dates = $this->formatDate($request->fromDate, $request->toDate);
        $ticketsByInqu = Ticket::whereDate('created_at', '>=', $dates['fromDate']->format('Y-m-d'))
            ->whereDate('created_at', '<=', $dates['toDate']->format('Y-m-d'))
            ->whereNotNull('inquire')
            ->get()
            ->groupBy('inquire');
        $data = [];
        $allInquries = config('enums.inquires');

        $inquires = [];
        $inquires = $allInquries['Academic'];
        foreach ($allInquries['Professional'] as $inq) {
            array_push($inquires, $inq);
        }
        foreach ($ticketsByInqu as $inquire => $tickets) {
            $data[$inquire] = $tickets->count();
        }
        $notPresents = array_diff($inquires, array_keys($data));
        foreach ($notPresents as $key) {
            $data[$key] = 0;
        }
        return $data;
    }

    public function getPerformance(Request $request)
    {
        $dates = $this->formatDate($request->fromDate, $request->toDate);
        $mentors = Mentor::get();
        $data = [];
        foreach ($mentors as $mentor) {
            $openQuire = 0;
            $assignQuire = 0;
            $solvedQuire = 0;
            $rating = 0;

            $rate = Rating::where('rateable_id', $mentor->user_id)
                ->whereDate('created_at', '>=', $dates['fromDate']->format('Y-m-d'))
                ->whereDate('created_at', '<=', $dates['toDate']->format('Y-m-d'))
                ->sum('rating');

            $count = Rating::where('rateable_id', $mentor->user_id)
                ->whereDate('created_at', '>=', $dates['fromDate']->format('Y-m-d'))
                ->whereDate('created_at', '<=', $dates['toDate']->format('Y-m-d'))
                ->count();

            if ($count > 0) {
                $rate = round($rate / $count, 2);
            }

            $chatRoomSmall = ChatRoom::where('small_id_participant', $mentor->user_id)
                ->whereDate('created_at', '>=', $dates['fromDate']->format('Y-m-d'))
                ->whereDate('created_at', '<=', $dates['toDate']->format('Y-m-d'))
                ->get();

            foreach ($chatRoomSmall as $chatRoom) {
                if ($chatRoom->tickets_json != '') {
                    $assignQuire = $assignQuire + sizeof(json_decode($chatRoom->tickets_json));
                    foreach (json_decode($chatRoom->tickets_json) as $ticketId) {
                        $ticket = Ticket::findOrFail($ticketId);
                        if ($ticket->status == 'solved') {
                            $solvedQuire = $solvedQuire + 1;
                        } else {
                            $openQuire = $openQuire + 1;
                        }
                    }
                }
            }

            $chatRoomBig = ChatRoom::where('big_id_participant', $mentor->user_id)
                ->whereDate('created_at', '>=', $dates['fromDate']->format('Y-m-d'))
                ->whereDate('created_at', '<=', $dates['toDate']->format('Y-m-d'))
                ->get();

            foreach ($chatRoomBig as $chatRoom) {
                if ($chatRoom->tickets_json != '') {
                    $assignQuire = $assignQuire + sizeof(json_decode($chatRoom->tickets_json));
                    foreach (json_decode($chatRoom->tickets_json) as $ticketId) {
                        $ticket = Ticket::findOrFail($ticketId);
                        if ($ticket->status == 'solved') {
                            $solvedQuire = $solvedQuire + 1;
                        } else {
                            $openQuire = $openQuire + 1;
                        }
                    }
                }
            }


            $data[] = [
                'profile_image' => $mentor->user->profile_image,
                'first_name' => $mentor->user->first_name,
                'last_name' => $mentor->user->last_name,
                'email' => $mentor->user->email,
                'open_quire' => $openQuire,
                'solved_quire' => $solvedQuire,
                'assign_quire' => $assignQuire,
                'rating' =>  $rate ?? $rating
            ];
        }
        return collect($data)->paginate(15);
    }

    public function getPagesHit(Request $request)
    {
        $dates = $this->formatDate($request->fromDate, $request->toDate);
        $visitsByPage = Visit::whereDate('last_visit', '>=', $dates['fromDate']->format('Y-m-d'))
            ->whereDate('last_visit', '<=', $dates['toDate']->format('Y-m-d'))
            ->get()
            ->groupBy('page');

        $data = [];
        foreach ($visitsByPage as $page => $visits) {
            $data[$page] = $visits->count();
        }
        $missed = array_diff(array_values(config('enums.url')), array_keys($data));
        foreach ($missed as $miss) {
            $data[$miss] = 0;
        }
        return $data;
    }
}
