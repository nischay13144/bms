<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theatre extends Model
{
    //
    protected $fillable = ['name','location'];
    public function movies(){
        return $this->belongsToMany(Movie::class);
    }

    public function showtimes(){
        return $this->belongsToMany(Showtimes::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }
}
