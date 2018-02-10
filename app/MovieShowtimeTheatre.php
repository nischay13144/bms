<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieShowtimeTheatre extends Model
{
    //
    protected $table = 'movie_theatre';
    public $timestamps = false;
    protected $fillable = ['movie_id','showtime_id','theatre_id'];


}
