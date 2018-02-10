<?php

namespace App\Repositories;
use App\Product;
use App\Redis;
use App\Shop;
class Shops{
    protected $redis;
    public function __construct(Redis $redis){
        $this->redis = $redis;
    }
    public function all(){
        return Shop::all();

    }

}