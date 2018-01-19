<?php

namespace Laratrade\Trader\Concerns;

use BadFunctionCallException;

trait HandlesErrors
{
    /**
     * The error messages.
     *
     * @var array
     */
    protected static $errors = [
        self::ERR_LIB_NOT_INITIALIZE        => 'Library not initialized',
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
     * Handle errors.
     */
    protected function handleErrors()
    {
        $errorCode = trader_errno();
        if (isset(static::$errors[$errorCode])) {
            throw new BadFunctionCallException(static::$errors[$errorCode]);
        }
    }
}
