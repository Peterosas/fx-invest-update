<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Investment;
use Carbon\Carbon;


class EarningUpdaterController extends Controller {

    public function rInvestmentsStatus() {
      Investment::whereStatus("completed")->update(['status' => "running"]);

      dd("Done");
    }

    public function updateInvestorBalance() {
        $total_earning = 0;

        $investments = Investment::whereStatus('running')->get();

        foreach($investments as $investment) {
            $user = $investment->user;
            $user->total_amount -= $investment->temp_earning;
            $user->total_amount += $investment->totalEarnings();
            $investment->temp_earning = $investment->totalEarnings();

            $now = Carbon::now();

            if($now->gte($investment->getDueDate())) {
                $investment->status = "completed";
                $transaction = $investment->transaction();
                $transaction->status = "completed";
                $transaction->save();
                $user->total_amount += $investment->amount;
            }

            $user->save();
            $investment->save();
        }

    }

}
