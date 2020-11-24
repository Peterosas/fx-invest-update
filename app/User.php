<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'username', 'email', 'password', 'ref_id', 'sponsor_id', 'total_amount', 'total_bonus', 'package_id', 'phone', 'city', 'state', 'country', 'address', 'zip_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function displayName() {
        return $this->username;
    }

    public function transactions() {
        return $this->hasMany('App\Transaction')->orderBy('created_at', 'DESC');
    }

    public function account_settings() {
        return $this->hasOne('App\AccountSettings');
    }

    public function balanceWithFormat($placeCurrency = "left") {
        return formatAmount($this->getBalance());
    }

    public function getBalance() {
        return $this->total_amount;
    }

    public function bonusEarnedWithFormat($placeCurrency = "left") {
        return formatAmount($this->total_bonus);
    }

    public function trans_count() {
        return count($this->transactions);
    }

    public static function generateRefId() {
        $id = config('company.prefix') . mt_rand(100000, 999999);

        if (self::generateRefIdHelper($id)) {
            return generateRefId();
        }

        return $id;
    }

    public static function generateRefIdHelper($id) {
        return self::whereRefId($id)->exists();
    }

    public function referrals() {
        return self::where('sponsor_id', $this->ref_id)->get();
    }

    public function sponsor() {
        return self::where('ref_id', $this->sponsor_id)->first();
    }

    public function totalBonusEarnedFromMe() {
        $investments = $this->investments;

        $total_bonus = 0;

        foreach($investments as $investment) {
            $total_bonus += $investment->bonus();
        }

        return $total_bonus;
    }

    public function totalProfit() {
        $investments = $this->investments;

        $total_profit = 0;

        foreach($investments as $investment) {
            $total_profit += $investment->totalEarnings();
        }

        return $total_profit;
    }

    public function investments() {
        return $this->hasMany('App\Investment')->orderBy('created_at', 'DESC');;
    }
    public function invest_count() {
        return count($this->investments);
    }

    public function wallet_address() {
        $wa = WalletAddress::where('user_id', $this->id)->where('used', false)->first();

        if ($wa) {
            return $wa;
        }

        return new WalletAddress();
    }

}
