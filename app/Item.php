<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function service() {
        return $this->belongsTo('App\Service');
    }

    public function booking() {
        return $this->hasMany('App\Booking');
    }
}
