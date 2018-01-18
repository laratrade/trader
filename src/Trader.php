<?php

namespace Laratrade\Trader;

use BadFunctionCallException;
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
     * The error messages.
     *
     * @var array
     */
    protected static $errors = [
        self::ERR_BAD_PARAM                 => 'Bad parameter',
        self::ERR_ALLOC_ERR                 => 'Allocation error',
        self::ERR_GROUP_NOT_FOUND           => 'Group not found',
        self::ERR_FUNC_NOT_FOUND            => 'Function not found',
        self::ERR_INVALID_HANDLE            => 'Invalid handle',
        self::ERR_INVALID_PARAM_HOLDER      => 'Invalid parameter holder',
        self::ERR_INVALID_PARAM_HOLDER_TYPE => 'Invalid parameter holder type',
        self::ERR_INVALID_PARAM_FUNCTION    => 'Invalid parameter function',
        self::ERR_INPUT_NOT_ALL_INITIALIZE  => 'Input not all initialized',
        self::ERR_OUTPUT_NOT_ALL_INITIALIZE => 'Output not all initialized',
        self::ERR_OUT_OF_RANGE_START_INDEX  => 'Out of range on start index',
        self::ERR_OUT_OF_RANGE_END_INDEX    => 'Out of range on end index',
        self::ERR_INVALID_LIST_TYPE         => 'Invalid list type',
        self::ERR_BAD_OBJECT                => 'Bad object',
        self::ERR_NOT_SUPPORTED             => 'Not supported',
        self::ERR_INTERNAL_ERROR            => 'Internal error',
        self::ERR_UNKNOWN_ERROR             => 'Unknown error',
    ];

    /**
     * @param string $name
     * @param array  $arguments
     *
     * @return mixed
     */
    public function __call(string $name, array $arguments)
    {
        $result = call_user_func_array('trader_' . $name, $arguments);

        if (false === $result && isset(static::$errors[trader_errno()])) {
            throw new BadFunctionCallException(static::$errors[trader_errno()]);
        }

        return $result;
    }
}
