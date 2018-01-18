<?php

namespace Laratrade\Trader\Contracts;

/**
 * Trait MagicCalls
 * @package Laratrade\Trader\Contracts
 *
 * phpcs:disable Generic.Files.LineLength
 * phpcs:disable PSR1.Methods.CamelCapsMethodName
 */
trait MagicCalls
{
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdl2crows(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdl3blackcrows(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdl3inside(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdl3linestrike(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdl3outside(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdl3starsinsouth(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdl3whitesoldiers(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlabandonedbaby(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdladvanceblock(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlbelthold(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlbreakaway(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlclosingmarubozu(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlconcealbabyswall(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlcounterattack(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdldarkcloudcover(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.5
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdldoji(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdldojistar(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdldragonflydoji(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlengulfing(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdleveningdojistar(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdleveningstar(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlgapsidesidewhite(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlgravestonedoji(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlhammer(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlhangingman(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlharami(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlharamicross(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlhighwave(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlhikkake(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlhikkakemod(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlhomingpigeon(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlidentical3crows(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlinneck(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlinvertedhammer(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlkicking(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlkickingbylength(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlladderbottom(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdllongleggeddoji(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdllongline(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlmarubozu(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlmatchinglow(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlmathold(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.5
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlmorningdojistar(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlmorningstar(
        array $open,
        array $high,
        array $low,
        array $close,
        float $penetration = 0.3
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlonneck(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlpiercing(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlrickshawman(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlrisefall3methods(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlseparatinglines(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlshootingstar(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlshortline(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlspinningtop(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlstalledpattern(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlsticksandwich(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdltakuri(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdltasukigap(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlthrusting(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdltristar(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlunique3river(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlupsidegap2crows(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cdlxsidegap3methods(array $open, array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function ceil(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Chande Momentum Oscillator.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function cmo(array $real, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function correl(array $real0, array $real1, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cos(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function cosh(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Double Exponential Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function dema(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function div(array $real0, array $real1): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function dx(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Exponential Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function ema(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
        return 0;
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
    public static function exp(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function floor(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Get compatibility mode.
     *
     * Get compatibility mode which affects the way calculations are done by all the extension functions.
     *
     * @return int Returns the compatibility mode id which can be identified by COMPATIBILITY_* series of constants.
     */
    public static function get_compat(): int
    {
        return 0;
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
    public static function get_unstable_period(int $functionId): int
    {
        return 0;
    }

    /**
     * Hilbert Transform - Dominant Cycle Period.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public static function ht_dcperiod(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Hilbert Transform - Dominant Cycle Phase.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public static function ht_dcphase(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Hilbert Transform - Phasor Components.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public static function ht_phasor(array $open, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Hilbert Transform - Phasor Components.
     *
     * @param array $open  Opening price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_sine(array $open, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Hilbert Transform - Instantaneous Trendline.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public static function ht_trendline(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Hilbert Transform - Trend vs Cycle Mode.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public static function ht_trendmode(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Kaufman Adaptive Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function kama(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Linear Regression Angle.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function linearreg_angle(array $real, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Linear Regression Angle.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function linearreg_intercept(array $real, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Linear Regression Slope.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function linearreg_slope(array $real, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Linear Regression.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function linearreg(array $real, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function ln(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function log10(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function ma(array $real, int $timePeriod = 30, int $mAType = 0): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function macd(
        array $real,
        int $fastPeriod = 12,
        int $slowPeriod = 26,
        int $signalPeriod = 9
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function macdext(
        array $real,
        int $fastPeriod = 12,
        int $fastMAType = 0,
        int $slowPeriod = 26,
        int $slowMAType = 0,
        int $signalPeriod = 9
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Moving Average Convergence/Divergence Fix 12/26.
     *
     * @param array $real         Array of real values.
     * @param int   $signalPeriod Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function macdfix(array $real, int $signalPeriod = 9): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function mama(array $real, float $fastLimit = 0.5, float $slowLimit = 0.05): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function mavp(
        array $real,
        array $periods,
        int $minPeriod = 2,
        int $maxPeriod = 30,
        int $mAType = 0
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Highest value over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function max(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Index of highest value over a specified period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function maxindex(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Median Price.
     *
     * @param array $high High price, array of real values.
     * @param array $low  Low price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public static function medprice(array $high, array $low): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function mfi(array $high, array $low, array $close, array $volume, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * MidPoint over period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function midpoint(array $real, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function midprice(array $high, array $low, int $timePeriod = 14)
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Lowest value over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function min(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Index of lowest value over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function minindex(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Lowest and highest values over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function minmax(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Indexes of lowest and highest values over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function minmaxindex(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function minus_di(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function minus_dm(array $high, array $low, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Momentum.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function mom(array $real, int $timePeriod = 10): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function mult(array $real0, array $real1): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function natr(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * On Balance Volume.
     *
     * @param array $real   Array of real values.
     * @param array $volume Volume traded, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public static function obv(array $real, array $volume): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function plus_di(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function plus_dm(array $high, array $low, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function ppo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = 0): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Rate of change : ((price/prevPrice)-1)*100.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function roc(array $real, int $timePeriod = 10): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Rate of change Percentage: (price-prevPrice)/prevPrice.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function rocp(array $real, int $timePeriod = 10): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Rate of change ratio 100 scale: (price/prevPrice)*100.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function rocr100(array $real, int $timePeriod = 10): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Rate of change ratio: (price/prevPrice).
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function rocr(array $real, int $timePeriod = 10): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Relative Strength Index.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function rsi(array $real, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function sar(array $high, array $low, float $acceleration = 0.02, float $maximum = 0.2): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Parabolic SAR - Extended.
     *
     * @param array $high                  High price, array of real values.
     * @param array $low                   Low price, array of real values.
     * @param float $startValue            Start value and direction. 0 for Auto, >0 for Long, <0 for Short. Valid range from TRADER_REAL_MIN to TRADER_REAL_MAX.
     * @param float $offsetOnReverse       Percent offset added/removed to initial stop on short/long reversal. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationInitLong  Acceleration Factor initial value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationLong      Acceleration Factor for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationMaxLong   Acceleration Factor maximum value for the Long direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationInitShort Acceleration Factor initial value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationShort     Acceleration Factor for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
     * @param float $accelerationMaxShort  Acceleration Factor maximum value for the Short direction. Valid range from 0 to TRADER_REAL_MAX.
     *
     * @return array Returns an array with calculated data.
     */
    public static function sarext(
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
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Set compatibility mode.
     *
     * Set compatibility mode which will affect the way calculations are done by all the extension functions.
     *
     * @param int $compatId Compatibility Id. TRADER_COMPATIBILITY_* series of constants should be used.
     */
    public static function set_compat(int $compatId)
    {
        $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Set unstable period.
     *
     * Influences unstable period factor for functions, which are sensible to it. More information about unstable periods can be found on the » TA-Lib API documentation page.
     *
     * @param int $functionId Function ID the factor should be set for. FUNC_UNST_* constant series can be used to affect the corresponding function.
     * @param int $timePeriod Unstable period value.
     */
    public static function set_unstable_period(int $functionId, int $timePeriod)
    {
        $this->__call(__FUNCTION__, func_get_args());
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
    public static function sin(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function sinh(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Simple Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function sma(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function sqrt(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function stddev(array $real, int $timePeriod = 5, float $nbDev = 1.0): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function stoch(
        array $high,
        array $low,
        array $close,
        int $fastK_Period = 5,
        int $slowK_Period = 3,
        int $slowK_MAType = 0,
        int $slowD_Period = 3,
        int $slowD_MAType = 0
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function stochf(
        array $high,
        array $low,
        array $close,
        int $fastK_Period = 5,
        int $fastD_Period = 3,
        int $fastD_MAType = 0
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function stochrsi(
        array $real,
        int $timePeriod = 14,
        int $fastK_Period = 5,
        int $fastD_Period = 3,
        int $fastD_MAType = 0
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function sub(array $real0, array $real1): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Summation.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function sum(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function t3(array $real, int $timePeriod = 5, float $vFactor = 0.7): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function tan(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function tanh(array $real): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Triple Exponential Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function tema(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function trange(array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Triangular Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function trima(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function trix(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Time Series Forecast.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function tsf(array $real, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function typprice(array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function ultosc(
        array $high,
        array $low,
        array $close,
        int $timePeriod1 = 7,
        int $timePeriod2 = 14,
        int $timePeriod3 = 28
    ): array {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function var(array $real, int $timePeriod = 5, float $nbDev = 1.0): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function wclprice(array $high, array $low, array $close): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
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
    public static function willr(array $high, array $low, array $close, int $timePeriod = 14): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }

    /**
     * Weighted Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public static function wma(array $real, int $timePeriod = 30): array
    {
        return $this->__call(__FUNCTION__, func_get_args());
    }
}
