<?php
/**
 * Created by PhpStorm.
 * User: gnpok
 * Date: 19-3-30
 * Time: 下午10:57
 */

namespace App\Utility\Pool;

use EasySwoole\Component\Pool\AbstractPool;

class RedisPool extends AbstractPool
{
    protected function createObject()
    {
        $redis = new RedisObject();
        $ret = $redis->connect('127.0.0.1', 6379);
        if($ret){
        	$redis->select(1);
        	return $ret;
        }
        return null;
    }
}