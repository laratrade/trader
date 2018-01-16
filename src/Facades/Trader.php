<?php

namespace Laratrade\Trader\Facades;

use Illuminate\Support\Facades\Facade;
use Laratrade\Trader\Contracts\Trader as TraderContract;

class Trader extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return TraderContract::class;
    }
}
