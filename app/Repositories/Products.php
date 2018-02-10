<?php

namespace App\Repositories;
use App\Post;
use App\Product;
use App\Redis;
class Products{
    protected $redis;
    public function __construct(Redis $redis){
        $this->redis = $redis;
    }
    public function all(){
        return Product::all();

    }

}