<?php
namespace Freedom\Prerequisites\Impl;

use Carbon\Carbon;
use Closure;
use Cache;

class Prerequisites {

    protected $expiration;

    public function __construct() {
        $this->expiration = $this->createExpiry();
    }

    protected function createExpiry()
    {
        //TODO CREATE EXPIRY BASE FROM CONFIG FILE
        $expiration = Carbon::tomorrow();
        return $expiration;
    }

    protected function cache($name,Closure $closure){
        return Cache::remember("prerequisites-{$name}",$this->expiration,$closure);
    }

}
