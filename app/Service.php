<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function items() {
        return $this->hasMany('App\Item');
    }

    public function booking() {
        return $this->hasMany('App\Booking','service');
    }
}
