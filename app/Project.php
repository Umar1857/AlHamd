<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function movedFrom() {
        return $this->belongsTo('App\City','from','id');
    }

    public function movedTo() {
        return $this->belongsTo('App\City','to','id');
    }
}
