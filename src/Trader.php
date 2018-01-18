<?php

namespace Laratrade\Trader;

use BadMethodCallException;
use Laratrade\Trader\Contracts\MagicCalls;
use Laratrade\Trader\Contracts\Trader as TraderContract;

/**
 * Class Trader
 * @package Laratrade\Trader
 */
class Trader implements TraderContract
{
    use MagicCalls;

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        if (method_exists($this, $name)) {
            return call_user_func_array(sprintf('trader_%s', $name), $arguments);
        }

        throw new BadMethodCallException(sprintf('Invalid method name %s', $name));
    }
}
