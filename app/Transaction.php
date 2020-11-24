<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use TSDate;
    
    public function user() {
        return $this->belongsTo("App\User");
    }
    
    public function amountWithFormat($placeCurrency = "left") {
        return formatAmount($this->amount);
    }
    
    public function oldBalanceWithFormat($placeCurrency = "left") {
        return formatAmount($this->old_balance);
    }
    
    public function newBalanceWithFormat($placeCurrency = "left") {
        return formatAmount($this->new_balance);
    }
    
    public static function adTotalDeposit() {
        return self::where('status', '<>', 'declined')->where('trans_type', 'deposit')->sum('amount');
    }
    
    public static function adTotalWithdrawal() {
        return self::where('status', 'completed')->where('trans_type', 'withdrawal')->sum('amount');
    }
    
    public static function pendingWithdrawals() {
        return self::where('status', getStatusText('pending'))->count();
    }
    
    public function investment() {
        return $this->hasOne('App\Investment', 'trans_id');
    }

}
