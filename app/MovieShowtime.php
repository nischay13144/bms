<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieShowtime extends Model
{
    //
    protected $table = 'movie_showtime';
    public $timestamps = false;
    protected $fillable = ['movie_id','showtime_id'];
}
