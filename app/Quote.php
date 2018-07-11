<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    public function from() {
        return $this->belongsTo('App\City','moving_from','id');
    }

    public function to() {
        return $this->belongsTo('App\City','moving_to','id');
    }
}
