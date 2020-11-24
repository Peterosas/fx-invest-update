<?php

namespace App;


trait TSDate
{
    public function getCreatedAtAttribute($value) {
        //return \Carbon\Carbon::parse($value)->format('l jS \\of F Y h:i:s A');
        
        return $value;
    }
}
