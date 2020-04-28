<?php

namespace App\Http\Controllers;

use App\Model\Chat;
use Illuminate\Http\Request;
use App\Model\Mentor;
use App\Model\Rating;
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
}
