<?php

namespace Laratrade\Trader\Contracts;

/**
 * Interface Trader
 * @package Laratrade\Trader\Contracts
 *
 * phpcs:disable Generic.Files.LineLength
 * phpcs:disable PSR1.Methods.CamelCapsMethodName
 */
interface Trader
{
    const MA_TYPE_SMA = 0;
    const MA_TYPE_EMA = 1;
    const MA_TYPE_WMA = 2;
    const MA_TYPE_DEMA = 3;
    const MA_TYPE_TEMA = 4;
    const MA_TYPE_TRIMA = 5;
    const MA_TYPE_KAMA = 6;
    const MA_TYPE_MAMA = 7;
    const MA_TYPE_T3 = 8;
    const REAL_MIN = -3.0000000000000002E+37;
    const REAL_MAX = 3.0000000000000002E+37;
    const FUNC_UNST_ADX = 0;
    const FUNC_UNST_ADXR = 1;
    const FUNC_UNST_ATR = 2;
    const FUNC_UNST_CMO = 3;
    const FUNC_UNST_DX = 4;
    const FUNC_UNST_EMA = 5;
    const FUNC_UNST_HT_DCPERIOD = 6;
    const FUNC_UNST_HT_DCPHASE = 7;
    const FUNC_UNST_HT_PHASOR = 8;
    const FUNC_UNST_HT_TRENDLINE = 10;
    const FUNC_UNST_HT_TRENDMODE = 11;
    const FUNC_UNST_KAMA = 12;
    const FUNC_UNST_MAMA = 13;
    const FUNC_UNST_MFI = 14;
    const FUNC_UNST_MINUS_DI = 15;
    const FUNC_UNST_MINUS_DM = 16;
    const FUNC_UNST_NATR = 17;
    const FUNC_UNST_PLUS_DI = 18;
    const FUNC_UNST_PLUS_DM = 19;
    const FUNC_UNST_RSI = 20;
    const FUNC_UNST_STOCHRSI = 21;
    const FUNC_UNST_T3 = 22;
    const FUNC_UNST_ALL = 23;
    const FUNC_UNST_NONE = -1;
    const COMPATIBILITY_DEFAULT = 0;
    const COMPATIBILITY_METASTOCK = 1;
    const ERR_SUCCESS = 0;
    const ERR_LIB_NOT_INITIALIZE = 1;
    const ERR_BAD_PARAM = 2;
    const ERR_ALLOC_ERR = 3;
    const ERR_GROUP_NOT_FOUND = 4;
    const ERR_FUNC_NOT_FOUND = 5;
    const ERR_INVALID_HANDLE = 6;
    const ERR_INVALID_PARAM_HOLDER = 7;
    const ERR_INVALID_PARAM_HOLDER_TYPE = 8;
    const ERR_INVALID_PARAM_FUNCTION = 9;
    const ERR_INPUT_NOT_ALL_INITIALIZE = 10;
    const ERR_OUTPUT_NOT_ALL_INITIALIZE = 11;
    const ERR_OUT_OF_RANGE_START_INDEX = 12;
    const ERR_OUT_OF_RANGE_END_INDEX = 13;
    const ERR_INVALID_LIST_TYPE = 14;
    const ERR_BAD_OBJECT = 15;
    const ERR_NOT_SUPPORTED = 16;
    const ERR_INTERNAL_ERROR = 5000;
    const ERR_UNKNOWN_ERROR = 65535;

    /**
     * Vector Trigonometric ACos.
     *
     * Calculates the arc cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function acos(array $real): array;

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
    public function ad(array $high, array $low, array $close, array $volume): array;

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
    public function add(array $real0, array $real1): array;

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
    ): array;

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
    public function adx(array $high, array $low, array $close, int $timePeriod = 14): array;

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
    public function adxr(array $high, array $low, array $close, int $timePeriod = 14): array;

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
    public function apo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = 0): array;

    /**
     * Aroon.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function aroon(array $high, array $low, int $timePeriod = 14): array;

    /**
     * Aroon Oscillator.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function aroonosc(array $high, array $low, int $timePeriod = 14): array;

    /**
     * Vector Trigonometric ASin.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function asin(array $real): array;

    /**
     * Vector Trigonometric ATan.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function atan(array $real): array;

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
    public function atr(array $high, array $low, array $close, int $timePeriod = 14): array;

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
    public function avgprice(array $open, array $high, array $low, array $close): array;

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
    ): array;

    /**
     * Beta.
     *
     * @param array $real0      Array of real values.
     * @param array $real1      Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function beta(array $real0, array $real1, int $timePeriod = 5): array;

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
    public function bop(array $open, array $high, array $low, array $close): array;

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
    public function cci(array $high, array $low, array $close, int $timePeriod = null): array;

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
    public function cdl2crows(array $open, array $high, array $low, array $close): array;

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
    public function cdl3blackcrows(array $open, array $high, array $low, array $close): array;

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
    public function cdl3inside(array $open, array $high, array $low, array $close): array;

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
    public function cdl3linestrike(array $open, array $high, array $low, array $close): array;

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
    public function cdl3outside(array $open, array $high, array $low, array $close): array;

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
    public function cdl3starsinsouth(array $open, array $high, array $low, array $close): array;

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
    public function cdl3whitesoldiers(array $open, array $high, array $low, array $close): array;

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
    ): array;

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
    public function cdladvanceblock(array $open, array $high, array $low, array $close): array;

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
    public function cdlbelthold(array $open, array $high, array $low, array $close): array;

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
    public function cdlbreakaway(array $open, array $high, array $low, array $close): array;

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
    public function cdlclosingmarubozu(array $open, array $high, array $low, array $close): array;

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
    public function cdlconcealbabyswall(array $open, array $high, array $low, array $close): array;

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
    public function cdlcounterattack(array $open, array $high, array $low, array $close): array;

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
    ): array;

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
    public function cdldoji(array $open, array $high, array $low, array $close): array;

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
    public function cdldojistar(array $open, array $high, array $low, array $close): array;

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
    public function cdldragonflydoji(array $open, array $high, array $low, array $close): array;

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
    public function cdlengulfing(array $open, array $high, array $low, array $close): array;

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
    ): array;

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
    ): array;

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
    public function cdlgapsidesidewhite(array $open, array $high, array $low, array $close): array;

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
    public function cdlgravestonedoji(array $open, array $high, array $low, array $close): array;

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
    public function cdlhammer(array $open, array $high, array $low, array $close): array;

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
    public function cdlhangingman(array $open, array $high, array $low, array $close): array;

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
    public function cdlharami(array $open, array $high, array $low, array $close): array;

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
    public function cdlharamicross(array $open, array $high, array $low, array $close): array;

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
    public function cdlhighwave(array $open, array $high, array $low, array $close): array;

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
    public function cdlhikkake(array $open, array $high, array $low, array $close): array;

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
    public function cdlhikkakemod(array $open, array $high, array $low, array $close): array;

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
    public function cdlhomingpigeon(array $open, array $high, array $low, array $close): array;

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
    public function cdlidentical3crows(array $open, array $high, array $low, array $close): array;

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
    public function cdlinneck(array $open, array $high, array $low, array $close): array;

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
    public function cdlinvertedhammer(array $open, array $high, array $low, array $close): array;

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
    public function cdlkicking(array $open, array $high, array $low, array $close): array;

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
    public function cdlkickingbylength(array $open, array $high, array $low, array $close): array;

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
    public function cdlladderbottom(array $open, array $high, array $low, array $close): array;

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
    public function cdllongleggeddoji(array $open, array $high, array $low, array $close): array;

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
    public function cdllongline(array $open, array $high, array $low, array $close): array;

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
    public function cdlmarubozu(array $open, array $high, array $low, array $close): array;

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
    public function cdlmatchinglow(array $open, array $high, array $low, array $close): array;

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
    ): array;

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
    ): array;

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
    ): array;

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
    public function cdlonneck(array $open, array $high, array $low, array $close): array;

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
    public function cdlpiercing(array $open, array $high, array $low, array $close): array;

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
    public function cdlrickshawman(array $open, array $high, array $low, array $close): array;

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
    public function cdlrisefall3methods(array $open, array $high, array $low, array $close): array;

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
    public function cdlseparatinglines(array $open, array $high, array $low, array $close): array;

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
    public function cdlshootingstar(array $open, array $high, array $low, array $close): array;

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
    public function cdlshortline(array $open, array $high, array $low, array $close): array;

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
    public function cdlspinningtop(array $open, array $high, array $low, array $close): array;

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
    public function cdlstalledpattern(array $open, array $high, array $low, array $close): array;

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
    public function cdlsticksandwich(array $open, array $high, array $low, array $close): array;

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
    public function cdltakuri(array $open, array $high, array $low, array $close): array;

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
    public function cdltasukigap(array $open, array $high, array $low, array $close): array;

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
    public function cdlthrusting(array $open, array $high, array $low, array $close): array;

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
    public function cdltristar(array $open, array $high, array $low, array $close): array;

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
    public function cdlunique3river(array $open, array $high, array $low, array $close): array;

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
    public function cdlupsidegap2crows(array $open, array $high, array $low, array $close): array;

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
    public function cdlxsidegap3methods(array $open, array $high, array $low, array $close): array;

    /**
     * Vector Ceil.
     *
     * Calculates the next highest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ceil(array $real): array;

    /**
     * Chande Momentum Oscillator.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function cmo(array $real, int $timePeriod = 14): array;

    /**
     * Pearson's Correlation Coefficient (r).
     *
     * @param array $real0      Array of real values.
     * @param array $real1      Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function correl(array $real0, array $real1, int $timePeriod = 30): array;

    /**
     * Vector Trigonometric Cos.
     *
     * Calculates the cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cos(array $real): array;

    /**
     * Vector Trigonometric Cosh.
     *
     * Calculates the hyperbolic cosine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function cosh(array $real): array;

    /**
     * Double Exponential Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function dema(array $real, int $timePeriod = 30): array;

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
    public function div(array $real0, array $real1): array;

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
    public function dx(array $high, array $low, array $close, int $timePeriod = 14): array;

    /**
     * Exponential Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function ema(array $real, int $timePeriod = 30): array;

    /**
     * Get error code.
     *
     * Get error code of the last operation.
     *
     * @return int Returns the error code identified by one of the ERR_* constants.
     */
    public function errno(): int;

    /**
     * Vector Arithmetic Exp.
     *
     * Calculates e raised to the power of each value in real. Returns an array with the calculated data.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function exp(array $real): array;

    /**
     * Vector Floor.
     *
     * Calculates the next lowest integer for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function floor(array $real): array;

    /**
     * Get compatibility mode.
     *
     * Get compatibility mode which affects the way calculations are done by all the extension functions.
     *
     * @return int Returns the compatibility mode id which can be identified by COMPATIBILITY_* series of constants.
     */
    public function get_compat(): int;

    /**
     * Get unstable period.
     *
     * Get unstable period factor for a particular function.
     *
     * @param int $functionId Function ID the factor to be read for. FUNC_UNST_* series of constants should be used.
     *
     * @return int Returns the unstable period factor for the corresponding function.
     */
    public function get_unstable_period(int $functionId): int;

    /**
     * Hilbert Transform - Dominant Cycle Period.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_dcperiod(array $real): array;

    /**
     * Hilbert Transform - Dominant Cycle Phase.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_dcphase(array $real): array;

    /**
     * Hilbert Transform - Phasor Components.
     *
     * @param array $open Opening price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_phasor(array $open): array;

    /**
     * Hilbert Transform - Phasor Components.
     *
     * @param array $open Opening price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_sine(array $open): array;

    /**
     * Hilbert Transform - Instantaneous Trendline.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_trendline(array $real): array;

    /**
     * Hilbert Transform - Trend vs Cycle Mode.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ht_trendmode(array $real): array;

    /**
     * Kaufman Adaptive Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function kama(array $real, int $timePeriod = 30): array;

    /**
     * Linear Regression Angle.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function linearreg_angle(array $real, int $timePeriod = 14): array;

    /**
     * Linear Regression Angle.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function linearreg_intercept(array $real, int $timePeriod = 14): array;

    /**
     * Linear Regression Slope.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function linearreg_slope(array $real, int $timePeriod = 14): array;

    /**
     * Linear Regression.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function linearreg(array $real, int $timePeriod = 14): array;

    /**
     * Vector Log Natural.
     *
     * Calculates the natural logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function ln(array $real): array;

    /**
     * Vector Log10.
     *
     * Calculates the base-10 logarithm for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function log10(array $real): array;

    /**
     * Moving average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param int   $mAType     Type of Moving Average. MA_TYPE_* series of constants should be used.
     *
     * @return array Returns an array with calculated data.
     */
    public function ma(array $real, int $timePeriod = 30, int $mAType = 0): array;

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
    ): array;

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
    ): array;

    /**
     * Moving Average Convergence/Divergence Fix 12/26.
     *
     * @param array $real         Array of real values.
     * @param int   $signalPeriod Smoothing for the signal line (nb of period). Valid range from 1 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function macdfix(array $real, int $signalPeriod = 9): array;

    /**
     * MESA Adaptive Moving Average.
     *
     * @param array $real      Array of real values.
     * @param float $fastLimit Upper limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     * @param float $slowLimit Lower limit use in the adaptive algorithm. Valid range from 0.01 to 0.99.
     *
     * @return array Returns an array with calculated data.
     */
    public function mama(array $real, float $fastLimit = 0.5, float $slowLimit = 0.05): array;

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
    ): array;

    /**
     * Highest value over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function max(array $real, int $timePeriod = 30): array;

    /**
     * Index of highest value over a specified period
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function maxindex(array $real, int $timePeriod = 30): array;

    /**
     * Median Price.
     *
     * @param array $high High price, array of real values.
     * @param array $low  Low price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function medprice(array $high, array $low): array;

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
    public function mfi(array $high, array $low, array $close, array $volume, int $timePeriod = 14): array;

    /**
     * MidPoint over period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function midpoint(array $real, int $timePeriod = 14): array;

    /**
     * Midpoint Price over period.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function midprice(array $high, array $low, int $timePeriod = 14): array;

    /**
     * Lowest value over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function min(array $real, int $timePeriod = 30): array;

    /**
     * Index of lowest value over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function minindex(array $real, int $timePeriod = 30): array;

    /**
     * Lowest and highest values over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function minmax(array $real, int $timePeriod = 30): array;

    /**
     * Indexes of lowest and highest values over a specified period.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function minmaxindex(array $real, int $timePeriod = 30): array;

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
    public function minus_di(array $high, array $low, array $close, int $timePeriod = 14): array;

    /**
     * Minus Directional Movement.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function minus_dm(array $high, array $low, int $timePeriod = 14): array;

    /**
     * Momentum.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function mom(array $real, int $timePeriod = 10): array;

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
    public function mult(array $real0, array $real1): array;

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
    public function natr(array $high, array $low, array $close, int $timePeriod = 14): array;

    /**
     * On Balance Volume.
     *
     * @param array $real   Array of real values.
     * @param array $volume Volume traded, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function obv(array $real, array $volume): array;

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
    public function plus_di(array $high, array $low, array $close, int $timePeriod = 14): array;

    /**
     * Plus Directional Movement.
     *
     * @param array $high       High price, array of real values.
     * @param array $low        Low price, array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function plus_dm(array $high, array $low, int $timePeriod = 14): array;

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
    public function ppo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = 0): array;

    /**
     * Rate of change : ((price/prevPrice)-1)*100.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function roc(array $real, int $timePeriod = 10): array;

    /**
     * Rate of change Percentage: (price-prevPrice)/prevPrice.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function rocp(array $real, int $timePeriod = 10): array;

    /**
     * Rate of change ratio 100 scale: (price/prevPrice)*100.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function rocr100(array $real, int $timePeriod = 10): array;

    /**
     * Rate of change ratio: (price/prevPrice).
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function rocr(array $real, int $timePeriod = 10): array;

    /**
     * Relative Strength Index.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function rsi(array $real, int $timePeriod = 14): array;

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
    public function sar(array $high, array $low, float $acceleration = 0.02, float $maximum = 0.2): array;

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
    ): array;

    /**
     * Set compatibility mode.
     *
     * Set compatibility mode which will affect the way calculations are done by all the extension functions.
     *
     * @param int $compatId Compatibility Id. COMPATIBILITY_* series of constants should be used.
     */
    public function set_compat(int $compatId);

    /**
     * Set unstable period.
     *
     * Influences unstable period factor for functions, which are sensible to it. More information about unstable periods can be found on the » TA-Lib API documentation page.
     *
     * @param int $functionId Function ID the factor should be set for. FUNC_UNST_* constant series can be used to affect the corresponding function.
     * @param int $timePeriod Unstable period value.
     */
    public function set_unstable_period(int $functionId, int $timePeriod);

    /**
     * Vector Trigonometric Sin.
     *
     * Calculates the sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function sin(array $real): array;

    /**
     * Vector Trigonometric Sinh.
     *
     * Calculates the hyperbolic sine for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function sinh(array $real): array;

    /**
     * Simple Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function sma(array $real, int $timePeriod = 30): array;

    /**
     * Vector Square Root.
     *
     * Calculates the square root of each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function sqrt(array $real): array;

    /**
     * Standard Deviation.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float $nbDev      Number of deviations
     *
     * @return array Returns an array with calculated data.
     */
    public function stddev(array $real, int $timePeriod = 5, float $nbDev = 1.0): array;

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
    ): array;

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
    ): array;

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
    ): array;

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
    public function sub(array $real0, array $real1): array;

    /**
     * Summation.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function sum(array $real, int $timePeriod = 30): array;

    /**
     * Triple Exponential Moving Average (T3).
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float $vFactor    Volume Factor. Valid range from 1 to 0.
     *
     * @return array Returns an array with calculated data.
     */
    public function t3(array $real, int $timePeriod = 5, float $vFactor = 0.7): array;

    /**
     * Vector Trigonometric Tan.
     *
     * Calculates the tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function tan(array $real): array;

    /**
     * Vector Trigonometric Tanh.
     *
     * Calculates the hyperbolic tangent for each value in real and returns the resulting array.
     *
     * @param array $real Array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function tanh(array $real): array;

    /**
     * Triple Exponential Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function tema(array $real, int $timePeriod = 30): array;

    /**
     * True Range.
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function trange(array $high, array $low, array $close): array;

    /**
     * Triangular Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function trima(array $real, int $timePeriod = 30): array;

    /**
     * 1-day Rate-Of-Change (ROC) of a Triple Smooth EMA.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod [OPTIONAL] [DEFAULT 30] Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function trix(array $real, int $timePeriod = 30): array;

    /**
     * Time Series Forecast.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function tsf(array $real, int $timePeriod = 14): array;

    /**
     * Typical Price.
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function typprice(array $high, array $low, array $close): array;

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
    ): array;

    /**
     * Variance.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     * @param float $nbDev      Number of deviations
     *
     * @return array Returns an array with calculated data.
     */
    public function var(array $real, int $timePeriod = 5, float $nbDev = 1.0): array;

    /**
     * Weighted Close Price.
     *
     * @param array $high  High price, array of real values.
     * @param array $low   Low price, array of real values.
     * @param array $close Closing price, array of real values.
     *
     * @return array Returns an array with calculated data.
     */
    public function wclprice(array $high, array $low, array $close): array;

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
    public function willr(array $high, array $low, array $close, int $timePeriod = 14): array;

    /**
     * Weighted Moving Average.
     *
     * @param array $real       Array of real values.
     * @param int   $timePeriod Number of period. Valid range from 2 to 100000.
     *
     * @return array Returns an array with calculated data.
     */
    public function wma(array $real, int $timePeriod = 30): array;
}
