<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WalletAddress extends Model
{
    public function user() {
        return $this->belongsTo(User::class);
    }
}
