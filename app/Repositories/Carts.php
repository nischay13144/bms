<?php

namespace App\Repositories;
use App\Post;
use App\Product;
use App\Cart;
use App\Redis;
class Carts{
    protected $redis;
    public function __construct(Redis $redis){
        $this->redis = $redis;
    }
    public function all(){
        return Cart::all();

    }

}