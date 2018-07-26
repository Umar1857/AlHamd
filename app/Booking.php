<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use Notifiable;

    public function from() {
        return $this->belongsTo('App\City','moving_from','id');
    }

    public function to() {
        return $this->belongsTo('App\City','moving_to','id');
    }

    public function service() {
        return $this->belongsTo('App\Service');
    }

    public function item() {
        return $this->belongsTo('App\Item','item');
    }
}
