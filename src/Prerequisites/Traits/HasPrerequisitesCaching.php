<?php

namespace Freedom\Prerequisites\Traits;

trait HasPrerequisitesCaching
{
    abstract public static function prerequisiteCacheName() : string;

    public static function bootHasPrerequisitesCaching()
    {
        static::deleted(function ($model) {
            \Prerequisites::forget( static::prerequisiteCacheName());
        });
        static::saved(function ($model) {
            \Prerequisites::forget( static::prerequisiteCacheName());
        });
    }

}
