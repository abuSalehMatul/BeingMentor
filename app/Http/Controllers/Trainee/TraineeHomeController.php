<?php

namespace App\Http\Controllers\Trainee;

use Illuminate\Http\Request;
use App\Http\Controllers\Trainee\TraineeController;
use Carbon\Carbon;
use App\Model\Trainee;

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

    private function formatDate(string $fromDate, string $toDate)
    {
        $formatedDates['fromDate'] = Carbon::parse($fromDate);
        $formatedDates['toDate'] = Carbon::parse($toDate);
        if ($formatedDates['toDate']->greaterThan(Carbon::today())) {
            $formatedDates['toDate'] = Carbon::today();
        }
        return $formatedDates;
    }

    public function getTrainees(Request $request ,$userId)
    {
        $dates = $this->formatDate($request->fromDate, $request->toDate);
        $data =[];
        $data['trainees'] = $this->traineeModel::getTraineeByUserId($userId, $dates['fromDate'], $dates['toDate']);
        return $data;
    }
}
