<?php
/**
 * Created by PhpStorm.
 * User: gnpok
 * Date: 19-3-30
 * Time: 下午10:54
 */

namespace App\Utility\Pool;

use Co\Redis;
use EasySwoole\Component\Pool\PoolObjectInterface;

class RedisObject extends Redis implements PoolObjectInterface
{
    function gc()
    {
        // TODO: Implement gc() method.
        $this->close();
    }

    function objectRestore()
    {
        // TODO: Implement objectRestore() method.
    }

    function beforeUse(): bool
    {
        // TODO: Implement beforeUse() method.
        return true;
    }
}