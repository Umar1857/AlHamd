<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function quotes() {
        return $this->hasMany('App\Quote');
    }

    public function projects() {
        return $this->hasMany('App\Project');
    }

    public function bookings() {
        return $this->hasMany('App\Project');
    }
}
