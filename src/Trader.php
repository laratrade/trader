<?php

namespace Nasyrov\Laravel\Trader;

use BadFunctionCallException;
use Nasyrov\Laravel\Trader\Contracts\Trader as TraderContract;

/**
 * Class Trader
 * @package Nasyrov\Laravel\Trader
 *
 * phpcs:disable Generic.Files.LineLength
 * phpcs:disable PSR1.Methods.CamelCapsMethodName
 */
class Trader implements TraderContract
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
     * Vector Trigonometric ACos.
     *
     * Calculates the arc cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function acos(array $real): array
    {
        $result = trader_acos($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Chaikin A/D Line.
     *
     * @param array $high   High price, array of real values.
     * @param array $low    Low price, array of real values.
     * @param array $close  Closing price, array of real values.
     * @param array $volume Volume traded, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ad(array $high, array $low, array $close, array $volume): array
    {
        $result = trader_ad($high, $low, $close, $volume);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Arithmetic Add.
     *
     * Calculates the vector addition of real0 to real1 and returns the resulting vector.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function add(array $real0, array $real1): array
    {
        $result = trader_add($real0, $real1);

        $this->handleErrors();

        return $result;
    }

    /**
     * Chaikin A/D Oscillator.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param array $volume     Volume traded, array of real values.
     * @param int   $fastPeriod Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $slowPeriod Number of period for the slow MA. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function adosc(
        array $high,
        array $low,
        array $close,
        array $volume,
        int $fastPeriod = 3,
        int $slowPeriod = 10
    ): array {
        $result = trader_adosc($high, $low, $close, $volume, $fastPeriod, $slowPeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Average Directional Movement Index.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function adx(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        $result = trader_adx($high, $low, $close, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Average Directional Movement Index Rating.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function adxr(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        $result = trader_adxr($high, $low, $close, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Absolute Price Oscillator.
     *
     * @param array $real       Array of real values.
     * @param int   $fastPeriod Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $slowPeriod Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int   $mAType     Type of Moving Average. MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data.
     */
    public function apo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = 0): array
    {
        $result = trader_apo($real, $fastPeriod, $slowPeriod, $mAType);

        $this->handleErrors();

        return $result;
    }

    /**
     * Aroon.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function aroon(array $high, array $low, int $timePeriod = 14): array
    {
        $result = trader_aroon($high, $low, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Aroon Oscillator.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function aroonosc(array $high, array $low, int $timePeriod = 14): array
    {
        $result = trader_aroonosc($high, $low, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Trigonometric ASin.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function asin(array $real): array
    {
        $result = trader_asin($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Trigonometric ATan.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function atan(array $real): array
    {
        $result = trader_atan($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Average True Range.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function atr(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        $result = trader_atr($high, $low, $close, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Average Price.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function avgprice(array $open, array $high, array $low, array $close): array
    {
        $result = trader_avgprice($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Bollinger Bands.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float $nbDevUp    Deviation multiplier for upper band. Valid range from REAL_MIN to REAL_MAX.
     * @param float $nbDevDn    Deviation multiplier for lower band. Valid range from REAL_MIN to REAL_MAX.
     * @param int   $mAType     Type of Moving Average. MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data.
     */
    public function bbands(
        array $real,
        int $timePeriod = 5,
        float $nbDevUp = 2.0,
        float $nbDevDn = 2.0,
        int $mAType = 0
    ): array {
        $result = trader_bbands($real, $timePeriod, $nbDevUp, $nbDevDn, $mAType);

        $this->handleErrors();

        return $result;
    }

    /**
     * Beta.
     *
     * @param array $real0      Array of real values.
     * @param array $real1      Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function beta(array $real0, array $real1, int $timePeriod = 5): array
    {
        $result = trader_beta($real0, $real1, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Balance Of Power.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function bop(array $open, array $high, array $low, array $close): array
    {
        $result = trader_bop($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Commodity Channel Index.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function cci(array $high, array $low, array $close, int $timePeriod = null): array
    {
        $result = trader_cci($high, $low, $close, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Two Crows.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdl2crows(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdl2crows($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Three Black Crows.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdl3blackcrows(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdl3blackcrows($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Three Inside Up/Down.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdl3inside(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdl3inside($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Three-Line Strike
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdl3linestrike(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdl3linestrike($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Three Outside Up/Down.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdl3outside(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdl3outside($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Three Stars In The South.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdl3starsinsouth(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdl3starsinsouth($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Three Advancing White Soldiers.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdl3whitesoldiers(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdl3whitesoldiers($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Abandoned Baby.
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlabandonedbaby(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        $result = trader_cdlabandonedbaby($open, $high, $low, $close, $penetration);

        $this->handleErrors();

        return $result;
    }

    /**
     * Advance Block.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdladvanceblock(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdladvanceblock($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Belt-hold.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlbelthold(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlbelthold($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Breakaway.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlbreakaway(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlbreakaway($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Closing Marubozu.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlclosingmarubozu(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlclosingmarubozu($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Concealing Baby Swallow.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlconcealbabyswall(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlconcealbabyswall($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Counterattack.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlcounterattack(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlcounterattack($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Dark Cloud Cover.
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdldarkcloudcover(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.5
    ): array {
        $result = trader_cdldarkcloudcover($open, $high, $low, $close, $penetration);

        $this->handleErrors();

        return $result;
    }

    /**
     * Doji.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdldoji(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdldoji($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Doji Star.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdldojistar(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdldojistar($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Dragonfly Doji.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdldragonflydoji(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdldragonflydoji($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Engulfing Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlengulfing(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlengulfing($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Evening Doji Star.
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdleveningdojistar(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        $result = trader_cdleveningdojistar($open, $high, $low, $close, $penetration);

        $this->handleErrors();

        return $result;
    }

    /**
     * Evening Star.
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdleveningstar(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        $result = trader_cdleveningstar($open, $high, $low, $close, $penetration);

        $this->handleErrors();

        return $result;
    }

    /**
     * Up/Down-gap side-by-side white lines.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlgapsidesidewhite(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlgapsidesidewhite($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Gravestone Doji.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlgravestonedoji(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlgravestonedoji($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Hammer.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlhammer(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlhammer($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Hanging Man.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlhangingman(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlhangingman($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Harami Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlharami(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlharami($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Harami Cross Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlharamicross(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlharamicross($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * High-Wave Candle.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlhighwave(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlhighwave($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Hikkake Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlhikkake(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlhikkake($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Modified Hikkake Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlhikkakemod(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlhikkakemod($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Homing Pigeon.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlhomingpigeon(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlhomingpigeon($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Identical Three Crows.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlidentical3crows(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlidentical3crows($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * In-Neck Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlinneck(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlinneck($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Inverted Hammer.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlinvertedhammer(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlinvertedhammer($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Kicking.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlkicking(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlkicking($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Kicking - bull/bear determined by the longer marubozu.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlkickingbylength(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlkickingbylength($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Ladder Bottom.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlladderbottom(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlladderbottom($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Long Legged Doji.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdllongleggeddoji(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdllongleggeddoji($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Long Line Candle.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdllongline(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdllongline($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Marubozu.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlmarubozu(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlmarubozu($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Matching Low.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlmatchinglow(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlmatchinglow($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Mat Hold.
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlmathold(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.5
    ): array {
        $result = trader_cdlmathold($open, $high, $low, $close, $penetration);

        $this->handleErrors();

        return $result;
    }

    /**
     * Morning Doji Star.
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration [OPTIONAL] [DEFAULT 0.3] Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlmorningdojistar(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        $result = trader_cdlmorningdojistar($open, $high, $low, $close, $penetration);

        $this->handleErrors();

        return $result;
    }

    /**
     * Morning Star.
     *
     * @param array $open        Opening price, array of real values.
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param float $penetration Percentage of penetration of a candle within another candle.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlmorningstar(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        $result = trader_cdlmorningstar($open, $high, $low, $close, $penetration);

        $this->handleErrors();

        return $result;
    }

    /**
     * On-Neck Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlonneck(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlonneck($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Piercing Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlpiercing(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlpiercing($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Rickshaw Man.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlrickshawman(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlrickshawman($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Rising/Falling Three Methods.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlrisefall3methods(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlrisefall3methods($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Separating Lines.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlseparatinglines(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlseparatinglines($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Shooting Star.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlshootingstar(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlshootingstar($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Short Line Candle.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlshortline(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlshortline($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Spinning Top.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlspinningtop(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlspinningtop($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Stalled Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlstalledpattern(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlstalledpattern($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Stick Sandwich.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlsticksandwich(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlsticksandwich($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Takuri (Dragonfly Doji with very long lower shadow).
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdltakuri(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdltakuri($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Tasuki Gap.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdltasukigap(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdltasukigap($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Thrusting Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlthrusting(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlthrusting($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Tristar Pattern.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdltristar(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdltristar($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Unique 3 River.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlunique3river(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlunique3river($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Upside Gap Two Crows.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlupsidegap2crows(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlupsidegap2crows($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Upside/Downside Gap Three Methods.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cdlxsidegap3methods(array $open, array $high, array $low, array $close): array
    {
        $result = trader_cdlxsidegap3methods($open, $high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Ceil.
     *
     * Calculates the next highest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ceil(array $real): array
    {
        $result = trader_ceil($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Chande Momentum Oscillator.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function cmo(array $real, int $timePeriod = 14): array
    {
        $result = trader_cmo($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Pearson's Correlation Coefficient (r).
     *
     * @param array $real0      Array of real values.
     * @param array $real1      Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function correl(array $real0, array $real1, int $timePeriod = 30): array
    {
        $result = trader_correl($real0, $real1, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Trigonometric Cos.
     *
     * Calculates the cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cos(array $real): array
    {
        $result = trader_cos($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Trigonometric Cosh.
     *
     * Calculates the hyperbolic cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cosh(array $real): array
    {
        $result = trader_cosh($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Double Exponential Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function dema(array $real, int $timePeriod = 30): array
    {
        $result = trader_dema($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Arithmetic Div.
     *
     * Divides each value from real0 by the corresponding value from real1 and returns the resulting array.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function div(array $real0, array $real1): array
    {
        $result = trader_div($real0, $real1);

        $this->handleErrors();

        return $result;
    }

    /**
     * Directional Movement Index.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array  Returns an array with calculated data.
     */
    public function dx(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        $result = trader_dx($high, $low, $close, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Exponential Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function ema(array $real, int $timePeriod = 30): array
    {
        $result = trader_ema($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Get error code.
     *
     * Get error code of the last operation.
     *
     * @return int Returns the error code identified by one of the ERR_* constants.
     */
    public function errno(): int
    {
        return trader_errno();
    }

    /**
     * Vector Arithmetic Exp.
     *
     * Calculates e raised to the power of each value in real. Returns an array with the calculated data.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function exp(array $real): array
    {
        $result = trader_exp($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Floor.
     *
     * Calculates the next lowest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function floor(array $real): array
    {
        $result = trader_floor($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Get compatibility mode.
     *
     * Get compatibility mode which affects the way calculations are done by all the extension functions.
     *
     * @return int Returns the compatibility mode id which can be identified by COMPATIBILITY_* series of constants.
     */
    public function get_compat(): int
    {
        return trader_get_compat();
    }

    /**
     * Get unstable period.
     *
     * Get unstable period factor for a particular function.
     *
     * @param int $functionId Function ID the factor to be read for. FUNC_UNST_* series of constants should be used.
     *
     * @return int Returns the unstable period factor for the corresponding function.
     */
    public function get_unstable_period(int $functionId): int
    {
        return trader_get_unstable_period($functionId);
    }

    /**
     * Hilbert Transform - Dominant Cycle Period.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_dcperiod(array $real): array
    {
        $result = trader_ht_dcperiod($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Hilbert Transform - Dominant Cycle Phase.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_dcphase(array $real): array
    {
        $result = trader_ht_dcphase($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Hilbert Transform - Phasor Components.
     *
     * @param array $open Opening price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_phasor(array $open): array
    {
        $result = trader_ht_phasor($open);

        $this->handleErrors();

        return $result;
    }

    /**
     * Hilbert Transform - Phasor Components.
     *
     * @param array $open  Opening price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_sine(array $open): array
    {
        $result = trader_ht_sine($open);

        $this->handleErrors();

        return $result;
    }

    /**
     * Hilbert Transform - Instantaneous Trendline.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_trendline(array $real): array
    {
        $result = trader_ht_trendline($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Hilbert Transform - Trend vs Cycle Mode.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_trendmode(array $real): array
    {
        $result = trader_ht_trendmode($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Kaufman Adaptive Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function kama(array $real, int $timePeriod = 30): array
    {
        $result = trader_kama($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Linear Regression Angle.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function linearreg_angle(array $real, int $timePeriod = 14): array
    {
        $result = trader_linearreg_angle($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Linear Regression Angle.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function linearreg_intercept(array $real, int $timePeriod = 14): array
    {
        $result = trader_linearreg_intercept($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Linear Regression Slope.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function linearreg_slope(array $real, int $timePeriod = 14): array
    {
        $result = trader_linearreg_slope($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Linear Regression.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function linearreg(array $real, int $timePeriod = 14): array
    {
        $result = trader_linearreg($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Log Natural.
     *
     * Calculates the natural logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ln(array $real): array
    {
        $result = trader_ln($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Log10.
     *
     * Calculates the base-10 logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function log10(array $real): array
    {
        $result = trader_log10($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Moving average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param int   $mAType     Type of Moving Average. MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data.
     */
    public function ma(array $real, int $timePeriod = 30, int $mAType = 0): array
    {
        $result = trader_ma($real, $timePeriod, $mAType);

        $this->handleErrors();

        return $result;
    }

    /**
     * Moving Average Convergence/Divergence.
     *
     * @param array $real         Array of real values.
     * @param int   $fastPeriod   Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $slowPeriod   Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int   $signalPeriod Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function macd(
        array $real,
        int $fastPeriod = 12,
        int $slowPeriod = 26,
        int $signalPeriod = 9
    ): array {
        $result = trader_macd($real, $fastPeriod, $slowPeriod, $signalPeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Moving Average Convergence/Divergence with controllable Moving Average type.
     *
     * @param array $real         Array of real values.
     * @param int   $fastPeriod   Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $fastMAType   Type of Moving Average for fast MA. MA_TYPE_* series of constants should be used.
     * @param int   $slowPeriod   Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int   $slowMAType   Type of Moving Average for fast MA. MA_TYPE_* series of constants should be used.
     * @param int   $signalPeriod Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function macdext(
        array $real,
        int $fastPeriod = 12,
        int $fastMAType = 0,
        int $slowPeriod = 26,
        int $slowMAType = 0,
        int $signalPeriod = 9
    ): array {
        $result = trader_macdext($real, $fastPeriod, $fastMAType, $slowPeriod, $slowMAType, $signalPeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Moving Average Convergence/Divergence Fix 12/26.
     *
     * @param array $real         Array of real values.
     * @param int   $signalPeriod Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function macdfix(array $real, int $signalPeriod = 9): array
    {
        $result = trader_macdfix($real, $signalPeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * MESA Adaptive Moving Average.
     *
     * @param array $real      Array of real values.
     * @param float $fastLimit Upper limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     * @param float $slowLimit Lower limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     *
     * @return array Returns an array with calculated data.
     */
    public function mama(array $real, float $fastLimit = 0.5, float $slowLimit = 0.05): array
    {
        $result = trader_mama($real, $fastLimit, $slowLimit);

        $this->handleErrors();

        return $result;
    }

    /**
     * Moving average with variable period
     *
     * @param array $real      Array of real values.
     * @param array $periods   Array of real values.
     * @param int   $minPeriod Value less than minimum will be changed to Minimum period. Valid range from 2 to 100000
     * @param int   $maxPeriod Value higher than maximum will be changed to Maximum period. Valid range from 2 to 100000
     * @param int   $mAType    Type of Moving Average. MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data.
     */
    public function mavp(
        array $real,
        array $periods,
        int $minPeriod = 2,
        int $maxPeriod = 30,
        int $mAType = 0
    ): array {
        $result = trader_mavp($real, $periods, $minPeriod, $maxPeriod, $mAType);

        $this->handleErrors();

        return $result;
    }

    /**
     * Highest value over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function max(array $real, int $timePeriod = 30): array
    {
        $result = trader_max($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Index of highest value over a specified period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function maxindex(array $real, int $timePeriod = 30): array
    {
        $result = trader_maxindex($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Median Price.
     *
     * @param array $high High price, array of real values.
     * @param array $low  Low price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function medprice(array $high, array $low): array
    {
        $result = trader_medprice($high, $low);

        $this->handleErrors();

        return $result;
    }

    /**
     * Money Flow Index.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param array $volume     Volume traded, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function mfi(array $high, array $low, array $close, array $volume, int $timePeriod = 14): array
    {
        $result = trader_mfi($high, $low, $close, $volume, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * MidPoint over period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function midpoint(array $real, int $timePeriod = 14): array
    {
        $result = trader_midpoint($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Midpoint Price over period.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function midprice(array $high, array $low, int $timePeriod = 14): array
    {
        $result = trader_midprice($high, $low, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Lowest value over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function min(array $real, int $timePeriod = 30): array
    {
        $result = trader_min($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Index of lowest value over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function minindex(array $real, int $timePeriod = 30): array
    {
        $result = trader_minindex($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Lowest and highest values over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function minmax(array $real, int $timePeriod = 30): array
    {
        $result = trader_minmax($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Indexes of lowest and highest values over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function minmaxindex(array $real, int $timePeriod = 30): array
    {
        $result = trader_minmaxindex($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Minus Directional Indicator.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function minus_di(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        $result = trader_minus_di($high, $low, $close, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Minus Directional Movement.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function minus_dm(array $high, array $low, int $timePeriod = 14): array
    {
        $result = trader_minus_dm($high, $low, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Momentum.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function mom(array $real, int $timePeriod = 10): array
    {
        $result = trader_mom($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Arithmetic Mult.
     *
     * Calculates the vector dot product of real0 with real1 and returns the resulting vector.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function mult(array $real0, array $real1): array
    {
        $result = trader_mult($real0, $real1);

        $this->handleErrors();

        return $result;
    }

    /**
     * Normalized Average True Range.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function natr(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        $result = trader_natr($high, $low, $close, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * On Balance Volume.
     *
     * @param array $real   Array of real values.
     * @param array $volume Volume traded, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function obv(array $real, array $volume): array
    {
        $result = trader_obv($real, $volume);

        $this->handleErrors();

        return $result;
    }

    /**
     * Plus Directional Indicator.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function plus_di(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        $result = trader_plus_di($high, $low, $close, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Plus Directional Movement.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function plus_dm(array $high, array $low, int $timePeriod = 14): array
    {
        $result = trader_plus_dm($high, $low, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Percentage Price Oscillator.
     *
     * @param array $real       Array of real values.
     * @param int   $fastPeriod Number of period for the fast MA. Valid range from 2 to 100000.
     * @param int   $slowPeriod Number of period for the slow MA. Valid range from 2 to 100000.
     * @param int   $mAType     Type of Moving Average. MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data.
     */
    public function ppo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = 0): array
    {
        $result = trader_ppo($real, $fastPeriod, $slowPeriod, $mAType);

        $this->handleErrors();

        return $result;
    }

    /**
     * Rate of change : ((price/prevPrice)-1)*100.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function roc(array $real, int $timePeriod = 10): array
    {
        $result = trader_roc($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Rate of change Percentage: (price-prevPrice)/prevPrice.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function rocp(array $real, int $timePeriod = 10): array
    {
        $result = trader_rocp($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Rate of change ratio 100 scale: (price/prevPrice)*100.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function rocr100(array $real, int $timePeriod = 10): array
    {
        $result = trader_rocr100($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Rate of change ratio: (price/prevPrice).
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function rocr(array $real, int $timePeriod = 10): array
    {
        $result = trader_rocr($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Relative Strength Index.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function rsi(array $real, int $timePeriod = 14): array
    {
        $result = trader_rsi($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Parabolic SAR.
     *
     * @param array $high         High price, array of real values.
     * @param array $low          Low price, array of real values.
     * @param float $acceleration Acceleration Factor used up to the Maximum value. Valid range from 0 to REAL_MAX.
     * @param float $maximum      Acceleration Factor Maximum value. Valid range from 0 to REAL_MAX.
     *
     * @return array Returns an array with calculated data.
     */
    public function sar(array $high, array $low, float $acceleration = 0.02, float $maximum = 0.2): array
    {
        $result = trader_sar($high, $low, $acceleration, $maximum);

        $this->handleErrors();

        return $result;
    }

    /**
     * Parabolic SAR - Extended.
     *
     * @param array $high                  High price, array of real values.
     * @param array $low                   Low price, array of real values.
     * @param float $startValue            Start value and direction. 0 for Auto, >0 for Long, <0 for Short. Valid range from REAL_MIN to REAL_MAX.
     * @param float $offsetOnReverse       Percent offset added/removed to initial stop on short/long reversal. Valid range from 0 to REAL_MAX.
     * @param float $accelerationInitLong  Acceleration Factor initial value for the Long direction. Valid range from 0 to REAL_MAX.
     * @param float $accelerationLong      Acceleration Factor for the Long direction. Valid range from 0 to REAL_MAX.
     * @param float $accelerationMaxLong   Acceleration Factor maximum value for the Long direction. Valid range from 0 to REAL_MAX.
     * @param float $accelerationInitShort Acceleration Factor initial value for the Short direction. Valid range from 0 to REAL_MAX.
     * @param float $accelerationShort     Acceleration Factor for the Short direction. Valid range from 0 to REAL_MAX.
     * @param float $accelerationMaxShort  Acceleration Factor maximum value for the Short direction. Valid range from 0 to REAL_MAX.
     *
     * @return array Returns an array with calculated data.
     */
    public function sarext(
        array $high,
        array $low,
        float $startValue = 0.0,
        float $offsetOnReverse = 0.0,
        float $accelerationInitLong = 0.02,
        float $accelerationLong = 0.02,
        float $accelerationMaxLong = 0.2,
        float $accelerationInitShort = 0.02,
        float $accelerationShort = 0.02,
        float $accelerationMaxShort = 0.2
    ): array {
        $result = trader_sarext(
            $high,
            $low,
            $startValue,
            $offsetOnReverse,
            $accelerationInitLong,
            $accelerationLong,
            $accelerationMaxLong,
            $accelerationInitShort,
            $accelerationShort,
            $accelerationMaxShort
        );

        $this->handleErrors();

        return $result;
    }

    /**
     * Set compatibility mode.
     *
     * Set compatibility mode which will affect the way calculations are done by all the extension functions.
     *
     * @param int $compatId Compatibility Id. COMPATIBILITY_* series of constants should be used.
     */
    public function set_compat(int $compatId)
    {
        trader_set_compat($compatId);
    }

    /**
     * Set unstable period.
     *
     * Influences unstable period factor for functions, which are sensible to it. More information about unstable periods can be found on the » TA-Lib API documentation page.
     *
     * @param int $functionId Function ID the factor should be set for. FUNC_UNST_* constant series can be used to affect the corresponding function.
     * @param int $timePeriod Unstable period value.
     */
    public function set_unstable_period(int $functionId, int $timePeriod)
    {
        trader_set_unstable_period($functionId, $timePeriod);
    }

    /**
     * Vector Trigonometric Sin.
     *
     * Calculates the sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function sin(array $real): array
    {
        $result = trader_sin($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Trigonometric Sinh.
     *
     * Calculates the hyperbolic sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function sinh(array $real): array
    {
        $result = trader_sinh($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Simple Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function sma(array $real, int $timePeriod = 30): array
    {
        $result = trader_sma($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Square Root.
     *
     * Calculates the square root of each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function sqrt(array $real): array
    {
        $result = trader_sqrt($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Standard Deviation.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float $nbDev      Number of deviations
     *
     * @return array Returns an array with calculated data.
     */
    public function stddev(array $real, int $timePeriod = 5, float $nbDev = 1.0): array
    {
        $result = trader_stddev($real, $timePeriod, $nbDev);

        $this->handleErrors();

        return $result;
    }

    /**
     * Stochastic.
     *
     * @param array $high         High price, array of real values.
     * @param array $low          Low price, array of real values.
     * @param array $close        Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $fastK_Period Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $slowK_Period Smoothing for making the Slow-K line. Valid range from 1 to 100000, usually set to 3.
     * @param int   $slowK_MAType Type of Moving Average for Slow-K. MA_TYPE_* series of constants should be used.
     * @param int   $slowD_Period Smoothing for making the Slow-D line. Valid range from 1 to 100000.
     * @param int   $slowD_MAType Type of Moving Average for Slow-D. MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data.
     */
    public function stoch(
        array $high,
        array $low,
        array $close,
        int $fastK_Period = 5,
        int $slowK_Period = 3,
        int $slowK_MAType = 0,
        int $slowD_Period = 3,
        int $slowD_MAType = 0
    ): array {
        $result = trader_stoch(
            $high,
            $low,
            $close,
            $fastK_Period,
            $slowK_Period,
            $slowK_MAType,
            $slowD_Period,
            $slowD_MAType
        );

        $this->handleErrors();

        return $result;
    }

    /**
     * Stochastic Fast.
     *
     * @param array $high         High price, array of real values.
     * @param array $low          Low price, array of real values.
     * @param array $close        Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $fastK_Period Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $fastD_Period Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.
     * @param int   $fastD_MAType Type of Moving Average for Fast-D. MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data.
     */
    public function stochf(
        array $high,
        array $low,
        array $close,
        int $fastK_Period = 5,
        int $fastD_Period = 3,
        int $fastD_MAType = 0
    ): array {
        $result = trader_stochf(
            $high,
            $low,
            $close,
            $fastK_Period,
            $fastD_Period,
            $fastD_MAType
        );

        $this->handleErrors();

        return $result;
    }

    /**
     * Stochastic Relative Strength Index.
     *
     * @param array $real         Array of real values.
     * @param int   $timePeriod   Number of period. Valid range from 2 to 100000.
     * @param int   $fastK_Period Time period for building the Fast-K line. Valid range from 1 to 100000.
     * @param int   $fastD_Period Smoothing for making the Fast-D line. Valid range from 1 to 100000, usually set to 3.
     * @param int   $fastD_MAType Type of Moving Average for Fast-D. MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data.
     */
    public function stochrsi(
        array $real,
        int $timePeriod = 14,
        int $fastK_Period = 5,
        int $fastD_Period = 3,
        int $fastD_MAType = 0
    ): array {
        $result = trader_stochrsi(
            $real,
            $timePeriod,
            $fastK_Period,
            $fastD_Period,
            $fastD_MAType
        );

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Arithmetic Subtraction.
     *
     * Calculates the vector subtraction of real1 from real0 and returns the resulting vector.
     *
     * @param array $real0 Array of real values.
     * @param array $real1 Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function sub(array $real0, array $real1): array
    {
        $result = trader_sub($real0, $real1);

        $this->handleErrors();

        return $result;
    }

    /**
     * Summation.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function sum(array $real, int $timePeriod = 30): array
    {
        $result = trader_sum($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Triple Exponential Moving Average (T3).
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float $vFactor    Volume Factor. Valid range from 1 to 0.
     *
     * @return array Returns an array with calculated data.
     */
    public function t3(array $real, int $timePeriod = 5, float $vFactor = 0.7): array
    {
        $result = trader_t3($real, $timePeriod, $vFactor);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Trigonometric Tan.
     *
     * Calculates the tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function tan(array $real): array
    {
        $result = trader_tan($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Vector Trigonometric Tanh.
     *
     * Calculates the hyperbolic tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function tanh(array $real): array
    {
        $result = trader_tanh($real);

        $this->handleErrors();

        return $result;
    }

    /**
     * Triple Exponential Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function tema(array $real, int $timePeriod = 30): array
    {
        $result = trader_tema($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * True Range.
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function trange(array $high, array $low, array $close): array
    {
        $result = trader_trange($high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Triangular Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function trima(array $real, int $timePeriod = 30): array
    {
        $result = trader_trima($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function trix(array $real, int $timePeriod = 30): array
    {
        $result = trader_trix($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Time Series Forecast.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function tsf(array $real, int $timePeriod = 14): array
    {
        $result = trader_tsf($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Typical Price.
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function typprice(array $high, array $low, array $close): array
    {
        $result = trader_typprice($high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Ultimate Oscillator.
     *
     * @param array $high        High price, array of real values.
     * @param array $low         Low price, array of real values.
     * @param array $close       Closing price, array of real values.
     * @param int   $timePeriod1 Number of bars for 1st period. Valid range from 1 to 100000.
     * @param int   $timePeriod2 Number of bars for 2nd period. Valid range from 1 to 100000.
     * @param int   $timePeriod3 Number of bars for 3rd period. Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function ultosc(
        array $high,
        array $low,
        array $close,
        int $timePeriod1 = 7,
        int $timePeriod2 = 14,
        int $timePeriod3 = 28
    ): array {
        $result = trader_ultosc($high, $low, $close, $timePeriod1, $timePeriod2, $timePeriod3);

        $this->handleErrors();

        return $result;
    }

    /**
     * Variance.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float $nbDev      Number of deviations
     *
     * @return array Returns an array with calculated data.
     */
    public function var(array $real, int $timePeriod = 5, float $nbDev = 1.0): array
    {
        $result = trader_var($real, $timePeriod, $nbDev);

        $this->handleErrors();

        return $result;
    }

    /**
     * Weighted Close Price.
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function wclprice(array $high, array $low, array $close): array
    {
        $result = trader_wclprice($high, $low, $close);

        $this->handleErrors();

        return $result;
    }

    /**
     * Williams' %R.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param array $close      Closing price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function willr(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        $result = trader_willr($high, $low, $close, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Weighted Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function wma(array $real, int $timePeriod = 30): array
    {
        $result = trader_wma($real, $timePeriod);

        $this->handleErrors();

        return $result;
    }

    /**
     * Handle errors.
     */
    protected function handleErrors()
    {
        $errorCode = trader_errno();
        if (isset(static::$errors[$errorCode])) {
            throw new BadFunctionCallException(static::$errors[$errorCode], $errorCode);
        }
    }
}
