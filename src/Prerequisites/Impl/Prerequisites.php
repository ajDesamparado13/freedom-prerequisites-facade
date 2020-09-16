<?php
namespace Freedom\Prerequisites\Impl;

use Illuminate\Support\Traits\Macroable;
use Carbon\Carbon;
use Closure;
use Cache;

class Prerequisites {
    use Macroable;

    protected $expiration;

    public function __construct() {
        $this->expiration = $this->createExpiry();
    }

    protected function createExpiry()
    {
        return Carbon::parse(\Config::get('prerequisites.cache.expiration','tomorrow'));
    }

    protected function cache($name,Closure $closure,$expiration=null){
        return Cache::remember("prerequisites-{$name}",$expiration ?? $this->expiration,$closure);
    }

    public function forget($cache){
        return Cache::forget("prerequisites-{$cache}");
    }

}
