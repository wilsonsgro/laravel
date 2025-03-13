<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Greeting extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'greeting';
    }

}
