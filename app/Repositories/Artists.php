<?php

namespace App\Repositories;
use App\Artist;

class Artists{
    public function all(){
        return Artist::all();

    }

}