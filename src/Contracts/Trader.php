<?php

namespace Laratrade\Trader\Contracts;

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

    public function acos();

    public function ad();

    public function add();

    public function adosc();

    public function adx();

    public function adxr();

    public function apo();

    public function aroon();

    public function aroonosc();

    public function asin();

    public function atan();

    public function atr();

    public function avgprice();

    public function bbands();

    public function beta();

    public function bop();

    public function cci();

    public function cdl2crows();

    public function cdl3blackcrows();

    public function cdl3inside();

    public function cdl3linestrike();

    public function cdl3outside();

    public function cdl3starsinsouth();

    public function cdl3whitesoldiers();

    public function cdlabandonedbaby();

    public function cdladvanceblock();

    public function cdlbelthold();

    public function cdlbreakaway();

    public function cdlclosingmarubozu();

    public function cdlconcealbabyswall();

    public function cdlcounterattack();

    public function cdldarkcloudcover();

    public function cdldoji();

    public function cdldojistar();

    public function cdldragonflydoji();

    public function cdlengulfing();

    public function cdleveningdojistar();

    public function cdleveningstar();

    public function cdlgapsidesidewhite();

    public function cdlgravestonedoji();

    public function cdlhammer();

    public function cdlhangingman();

    public function cdlharami();

    public function cdlharamicross();

    public function cdlhighwave();

    public function cdlhikkake();

    public function cdlhikkakemod();

    public function cdlhomingpigeon();

    public function cdlidentical3crows();

    public function cdlinneck();

    public function cdlinvertedhammer();

    public function cdlkicking();

    public function cdlkickingbylength();

    public function cdlladderbottom();

    public function cdllongleggeddoji();

    public function cdllongline();

    public function cdlmarubozu();

    public function cdlmatchinglow();

    public function cdlmathold();

    public function cdlmorningdojistar();

    public function cdlmorningstar();

    public function cdlonneck();

    public function cdlpiercing();

    public function cdlrickshawman();

    public function cdlrisefall3methods();

    public function cdlseparatinglines();

    public function cdlshootingstar();

    public function cdlshortline();

    public function cdlspinningtop();

    public function cdlstalledpattern();

    public function cdlsticksandwich();

    public function cdltakuri();

    public function cdltasukigap();

    public function cdlthrusting();

    public function cdltristar();

    public function cdlunique3river();

    public function cdlupsidegap2crows();

    public function cdlxsidegap3methods();

    public function ceil();

    public function cmo();

    public function correl();

    public function cos();

    public function cosh();

    public function dema();

    public function div();

    public function dx();

    public function ema();

    public function errno();

    public function exp();

    public function floor();

    public function get_compat();

    public function get_unstable_period();

    public function ht_dcperiod();

    public function ht_dcphase();

    public function ht_phasor();

    public function ht_sine();

    public function ht_trendline();

    public function ht_trendmode();

    public function kama();

    public function linearreg_angle();

    public function linearreg_intercept();

    public function linearreg_slope();

    public function linearreg();

    public function ln();

    public function log10();

    public function ma();

    public function macd();

    public function macdext();

    public function macdfix();

    public function mama();

    public function mavp();

    public function max();

    public function maxindex();

    public function medprice();

    public function mfi();

    public function midpoint();

    public function midprice();

    public function min();

    public function minindex();

    public function minmax();

    public function minmaxindex();

    public function minus_di();

    public function minus_dm();

    public function mom();

    public function mult();

    public function natr();

    public function obv();

    public function plus_di();

    public function plus_dm();

    public function ppo();

    public function roc();

    public function rocp();

    public function rocr100();

    public function rocr();

    public function rsi();

    public function sar();

    public function sarext();

    public function set_compat();

    public function set_unstable_period();

    public function sin();

    public function sinh();

    public function sma();

    public function sqrt();

    public function stddev();

    public function stoch();

    public function stochf();

    public function stochrsi();

    public function sub();

    public function sum();

    public function t3();

    public function tan();

    public function tanh();

    public function tema();

    public function trange();

    public function trima();

    public function trix();

    public function tsf();

    public function typprice();

    public function ultosc();

    public function var();

    public function wclprice();

    public function willr();

    public function wma();
}
