<?php

namespace Freedom\Prerequisites\Facade;

use Illuminate\Support\Facades\Facade;

class Prerequisites extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'prerequisites';
    }

}
