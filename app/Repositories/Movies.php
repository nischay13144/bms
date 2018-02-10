<?php

namespace App\Repositories;
use App\Movie;

class Movies{
    public function all(){
        return Movie::all();

    }

}