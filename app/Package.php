<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public function preparePack() {
        $name = ucfirst($this->name);
        $roi = $this->roi;        
        $days = $this->duration_in_days;
        $pack = "$name (ROI: $roi% in $days days)";
        
        return $pack;
    }

}
