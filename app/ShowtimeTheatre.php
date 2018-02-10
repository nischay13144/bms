<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShowtimeTheatre extends Model
{
    //
    protected $table = 'showtime_theatre';
    public $timestamps = false;
    protected $fillable = ['showtime_id','theatre_id'];
}
