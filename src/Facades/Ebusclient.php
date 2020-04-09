<?php

namespace Sl\Ebusclient\Facades;

use Illuminate\Support\Facades\Facade;

class Ebusclient extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ebusclient';
    }
}
