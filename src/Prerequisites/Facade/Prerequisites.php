<?php

namespace Freedom\Prerequisites\Facade;

use Illuminate\Support\Facades\Facade;

class Prerequsites extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'prerequisites';
    }

}
