<?php

namespace Coleus\Music\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Coleus\Music\Music
 */
class Music extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Coleus\Music\Music::class;
    }
}
