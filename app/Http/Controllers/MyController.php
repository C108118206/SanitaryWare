<?php

use Illuminate\Contracts\Cache\Factory as Cache;

class MyController  
{
    protected $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }
}