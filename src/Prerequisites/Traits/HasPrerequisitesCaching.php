<?php

namespace Freedom\Prerequisites\Traits;

trait HasPrerequisitesCaching
{
    abstract public static function prerequisiteCacheName() : string;

    public static function bootHasPrerequisitesCaching()
    {
        static::deleting(function ($model) {
            \Prerequisites::forget( static::prerequisiteCacheName());
        });
        static::saving(function ($model) {
            \Prerequisites::forget( static::prerequisiteCacheName());
        });
    }

}
