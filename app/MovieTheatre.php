<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MovieTheatre extends Model
{
    //
    protected $table = 'movie_theatre';
    public $timestamps = false;
    protected $fillable = ['movie_id','theatre_id'];
}
