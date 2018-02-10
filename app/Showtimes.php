<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showtimes extends Model
{
    //
    public function theatres(){
        return $this->belongsToMany(Theatre::class);
    }
}
