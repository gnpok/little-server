<?php
/**
 * Created by PhpStorm.
 * User: gnpok
 * Date: 19-3-30
 * Time: 上午8:12
 */

namespace App\Action;
use App\Utility\Pool\RedisPool;
use App\Utility\Pool\RedisObject;

class Index
{
    public function index(...$args)
    {
    	$res = RedisPool::invoke(function(RedisObject $redis){
    		return $redis->get("key");
    	});
    	var_dump($res);
    	var_dump($args);
    }

    public function test(...$args){
        var_dump($args);
    }
}