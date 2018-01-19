<?php

namespace Laratrade\Trader;

use Laratrade\Trader\Concerns\HandlesErrors;
use Laratrade\Trader\Concerns\CallsFunctions;
use Laratrade\Trader\Contracts\Trader as TraderContract;

/**
 * Class Trader
 * @package Laratrade\Trader
 */
class Trader implements TraderContract
{
    use CallsFunctions,
        HandlesErrors;
}
