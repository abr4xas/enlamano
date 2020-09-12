<?php

namespace Abr4xas\EnLaMano;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abr4xas\EnLaMano\EnLaMano
 */
class EnLaManoFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'EnLaMano';
    }
}
