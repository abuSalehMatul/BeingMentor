<?php

namespace App\Http\Controllers\Mentor;

use Illuminate\Http\Request;
use App\Http\Controllers\Mentor\MentorController;
use App\Model\Mentor;
use Carbon\Carbon;

class MentorHomeController extends MentorController
{
    protected $mentorModel;

    public function __construct(Mentor $mentorModel)
    {
        $this->mentorModel = $mentorModel;
    }

    public function index()
    {
        return view('panels.home');
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

    public function getMentor(Request $request, $userId)
    {
        $dates = $this->formatDate($request->fromDate, $request->toDate);
        $data= [];
        $data['mentors'] = $this->mentorModel::getMentorsByUserId($userId, $dates['fromDate'], $dates['toDate']);
        return $data;
    }
}
