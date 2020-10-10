<?php

namespace Abr4xas\EnLaMano;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abr4xas\EnLaMano\EnLaMano
 */
class EnLaMano extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'enlamano';
    }
}
