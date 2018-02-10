<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    //
    protected $fillable = ['slots'];
//
    public function theatres(){
        return $this->belongsToMany(Theatre::class);
    }
    public function movies(){
        return $this->belongsToMany(Movie::class);
    }

}
