<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Investment extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function transaction() {
      return Transaction::whereId($this->trans_id)->first();
    }

    public function user() {
        return $this->belongsTo("App\User");
    }

    public function package() {
        return $this->belongsTO("App\Package");
    }

    public function dailyEarnings() {
        $daily_earning = $this->amount * $this->package->roi/100;
        $daily_earning /= $this->package->duration_in_days;

        return $daily_earning;
    }


    public function totalEarnings() {
        $days = $this->daysElapsed();

        return $this->dailyEarnings() * $days;
    }

    public function daysElapsed() {
        $days = $this->created_at->diffInDays();

        if ($days > $this->package->duration_in_days) $days = $this->package->duration_in_days;

        return $days;
    }

    public static function adTotalInvestments() {
        return self::where('status', '<>', 'declined')->sum('amount');
    }

    public function getDueDate() {

        return $this->created_at->addDays($this->package->duration_in_days);
    }

    public function bonus() {
        return computeBonus($this->amount);
    }
}
