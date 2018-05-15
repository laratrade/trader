# Laravel Trader

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Laravel package for trader extension interface.

## Requirements

Make sure all dependencies have been installed before moving on:

* [PHP](http://php.net/manual/en/install.php) >= 7.0
* [Trader](http://php.net/manual/en/trader.installation.php)
* [Composer](https://getcomposer.org/download/)

## Install

Pull the package via Composer:

``` bash
$ composer require laratrade/trader
```

## Usage

Via dependency injection

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

class MyClass
{
    /**
     * The trader instance.
     *
     * @var Trader
     */
    protected $trader;

    /**
     * Create a new instance.
     *
     * @param Trader $trader
     */
    public function __construct(Trader $trader)
    {
        $this->indicatorManager = $trader;
    }
    
    /**
     * Handle my function.
     */
    public function myFunction()
    {
        ...
        $acos = $this->trader->acos($real);
        ...
    }
}
```

Via facade

``` php
<?php

use Nasyrov\Laravel\Trader\Facades\Trader;

class MyClass
{   
    /**
     * Handle my function.
     */
    public function myFunction()
    {
        ...
        $acos = Trader::acos($real);
        ...
    }
}
```

Via helper

``` php
<?php

class MyClass
{   
    /**
     * Handle my function.
     */
    public function myFunction()
    {
        ...
        $acos = trader()->acos($real);
        ...
    }
}
```

## Constants

### `MA_TYPE_SMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::MA_TYPE_SMA;
```

### `MA_TYPE_EMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::MA_TYPE_EMA;
```

### `MA_TYPE_WMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::MA_TYPE_WMA;
```

### `MA_TYPE_DEMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::MA_TYPE_DEMA;
```

### `MA_TYPE_TEMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::MA_TYPE_TEMA;
```

### `MA_TYPE_TRIMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::MA_TYPE_TRIMA;
```

### `MA_TYPE_KAMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::MA_TYPE_KAMA;
```

### `MA_TYPE_MAMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::MA_TYPE_MAMA;
```

### `MA_TYPE_T3`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::MA_TYPE_T3;
```

### `REAL_MIN`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::REAL_MIN;
```

### `REAL_MAX`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::REAL_MAX;
```

### `FUNC_UNST_ADX`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_ADX;
```

### `FUNC_UNST_ADXR`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_ADXR;
```

### `FUNC_UNST_ATR`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_ATR;
```

### `FUNC_UNST_CMO`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_CMO;
```

### `FUNC_UNST_DX`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_DX;
```

### `FUNC_UNST_EMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_EMA;
```

### `FUNC_UNST_HT_DCPERIOD`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_HT_DCPERIOD;
```

### `FUNC_UNST_HT_DCPHASE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_HT_DCPHASE;
```

### `FUNC_UNST_HT_PHASOR`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_HT_PHASOR;
```

### `FUNC_UNST_HT_SINE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_HT_SINE;
```

### `FUNC_UNST_HT_TRENDLINE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_HT_TRENDLINE;
```

### `FUNC_UNST_HT_TRENDMODE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_HT_TRENDMODE;
```

### `FUNC_UNST_KAMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_KAMA;
```

### `FUNC_UNST_MAMA`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_MAMA;
```

### `FUNC_UNST_MFI`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_MFI;
```

### `FUNC_UNST_MINUS_DI`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_MINUS_DI;
```

### `FUNC_UNST_MINUS_DM`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_MINUS_DM;
```

### `FUNC_UNST_NATR`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_NATR;
```

### `FUNC_UNST_PLUS_DI`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_PLUS_DI;
```

### `FUNC_UNST_PLUS_DM`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_PLUS_DM;
```

### `FUNC_UNST_RSI`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_RSI;
```

### `FUNC_UNST_STOCHRSI`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_STOCHRSI;
```

### `FUNC_UNST_T3`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_T3;
```

### `FUNC_UNST_ALL`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_ALL;
```

### `FUNC_UNST_NONE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::FUNC_UNST_NONE;
```

### `COMPATIBILITY_DEFAULT`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::COMPATIBILITY_DEFAULT;
```

### `COMPATIBILITY_METASTOCK`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::COMPATIBILITY_METASTOCK;
```

### `ERR_SUCCESS`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_SUCCESS;
```

### `ERR_LIB_NOT_INITIALIZE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_LIB_NOT_INITIALIZE;
```

### `ERR_BAD_PARAM`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_BAD_PARAM;
```

### `ERR_ALLOC_ERR`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_ALLOC_ERR;
```

### `ERR_GROUP_NOT_FOUND`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_GROUP_NOT_FOUND;
```

### `ERR_FUNC_NOT_FOUND`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_FUNC_NOT_FOUND;
```

### `ERR_INVALID_HANDLE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_INVALID_HANDLE;
```

### `ERR_INVALID_PARAM_HOLDER`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_INVALID_PARAM_HOLDER;
```

### `ERR_INVALID_PARAM_HOLDER_TYPE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_INVALID_PARAM_HOLDER_TYPE;
```

### `ERR_INVALID_PARAM_FUNCTION`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_INVALID_PARAM_FUNCTION;
```

### `ERR_INPUT_NOT_ALL_INITIALIZE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_INPUT_NOT_ALL_INITIALIZE;
```

### `ERR_OUTPUT_NOT_ALL_INITIALIZE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_OUTPUT_NOT_ALL_INITIALIZE;
```

### `ERR_OUT_OF_RANGE_START_INDEX`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_OUT_OF_RANGE_START_INDEX;
```

### `ERR_OUT_OF_RANGE_END_INDEX`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_OUT_OF_RANGE_END_INDEX;
```

### `ERR_INVALID_LIST_TYPE`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_INVALID_LIST_TYPE;
```

### `ERR_BAD_OBJECT`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_BAD_OBJECT;
```

### `ERR_NOT_SUPPORTED`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_NOT_SUPPORTED;
```

### `ERR_INTERNAL_ERROR`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_INTERNAL_ERROR;
```

### `ERR_UNKNOWN_ERROR`

``` php
<?php

use Nasyrov\Laravel\Trader\Contracts\Trader;

echo Trader::ERR_UNKNOWN_ERROR;
```

## Functions

### `acos`

Vector Trigonometric ACos

``` php
$result = Trader::acos($real);
```

### `ad`

Chaikin A/D Line

``` php
$result = Trader::ad(array $high, array $low, array $close, array $volume);
```

### `add`

Vector Arithmetic Add

``` php
$result = Trader::add(array $real0, array $real1);
```

### `adosc`

Chaikin A/D Oscillator

``` php
$result = Trader::adosc(array $high, array $low, array $close, array $volume, int $fastPeriod = 3, int $slowPeriod = 10);
```

### `adx`

Average Directional Movement Index

``` php
$result = Trader::adx(array $high, array $low, array $close, int $timePeriod = 14);
```

### `adxr`

Average Directional Movement Index Rating

``` php
$result = Trader::adxr(array $high, array $low, array $close, int $timePeriod = 14);
```

### `apo`

Absolute Price Oscillator

``` php
$result = Trader::apo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = 0);
```

### `aroon`

Aroon

``` php
$result = Trader::aroon(array $high, array $low, int $timePeriod = 14);
```

### `aroonosc`

Aroon Oscillator

``` php
$result = Trader::aroonosc(array $high, array $low, int $timePeriod = 14);
```

### `asin`

Vector Trigonometric ASin

``` php
$result = Trader::asin(array $real);
```

### `atan`

Vector Trigonometric ATan

``` php
$result = Trader::atan(array $real);
```

### `atr`

Average True Range

``` php
$result = Trader::atr(array $high, array $low, array $close, int $timePeriod = 14);
```

### `avgprice`

Average Price

``` php
$result = Trader::avgprice(array $open, array $high, array $low, array $close);
```

### `bbands`

Bollinger Bands

``` php
$result = Trader::bbands(array $real, int $timePeriod = 5, float $nbDevUp = 2.0, float $nbDevDn = 2.0, int $mAType = 0);
```

### `beta`

Beta

``` php
$result = Trader::beta(array $real0, array $real1, int $timePeriod = 5);
```

### `bop`

Balance Of Power

``` php
$result = Trader::bop(array $open, array $high, array $low, array $close);
```

### `cci`

Commodity Channel Index

``` php
$result = Trader::cci(array $high, array $low, array $close, int $timePeriod = null);
```

### `cdl2crows`

Two Crows

``` php
$result = Trader::cdl2crows(array $open, array $high, array $low, array $close);
```

### `cdl3blackcrows`

Three Black Crows

``` php
$result = Trader::cdl3blackcrows(array $open, array $high, array $low, array $close);
```

### `cdl3inside`

Three Inside Up/Down

``` php
$result = Trader::cdl3inside(array $open, array $high, array $low, array $close);
```

### `cdl3linestrike`

Three-Line Strike

``` php
$result = Trader::cdl3linestrike(array $open, array $high, array $low, array $close);
```

### `cdl3outside`

Three Outside Up/Down

``` php
$result = Trader::cdl3outside(array $open, array $high, array $low, array $close);
```

### `cdl3starsinsouth`

Three Stars In The South

``` php
$result = Trader::cdl3starsinsouth(array $open, array $high, array $low, array $close);
```

### `cdl3whitesoldiers`

Three Advancing White Soldiers

``` php
$result = Trader::cdl3whitesoldiers(array $open, array $high, array $low, array $close);
```

### `cdlabandonedbaby`

Abandoned Baby

``` php
$result = Trader::cdlabandonedbaby(array $open, array $high, array $low, array $close, float $penetration = 0.3);
```

### `cdladvanceblock`

Advance Block

``` php
$result = Trader::cdladvanceblock(array $open, array $high, array $low, array $close);
```

### `cdlbelthold`

Belt-hold

``` php
$result = Trader::cdlbelthold(array $open, array $high, array $low, array $close);
```

### `cdlbreakaway`

Breakaway

``` php
$result = Trader::cdlbreakaway(array $open, array $high, array $low, array $close);
```

### `cdlclosingmarubozu`

Closing Marubozu

``` php
$result = Trader::cdlclosingmarubozu(array $open, array $high, array $low, array $close);
```

### `cdlconcealbabyswall`

Concealing Baby Swallow

``` php
$result = Trader::cdlclosingmarubozu(array $open, array $high, array $low, array $close);
```

### `cdlcounterattack`

Counterattack

``` php
$result = Trader::cdlconcealbabyswall(array $open, array $high, array $low, array $close);
```

### `cdldarkcloudcover`

Dark Cloud Cover

``` php
$result = Trader::cdldarkcloudcover(array $open, array $high, array $low, array $close, float $penetration = 0.5);
```

### `cdldoji`

Doji

``` php
$result = Trader::cdldoji(array $open, array $high, array $low, array $close);
```

### `cdldojistar`

Doji Star

``` php
$result = Trader::cdldojistar(array $open, array $high, array $low, array $close);
```

### `cdldragonflydoji`

Dragonfly Doji

``` php
$result = Trader::cdldragonflydoji(array $open, array $high, array $low, array $close);
```

### `cdlengulfing`

Engulfing Pattern

``` php
$result = Trader::cdlengulfing(array $open, array $high, array $low, array $close);
```

### `cdleveningdojistar`

Evening Doji Star

``` php
$result = Trader::cdleveningdojistar(array $open, array $high, array $low, array $close, float $penetration = 0.3);
```

### `cdleveningstar`

Evening Star

``` php
$result = Trader::cdleveningstar(array $open, array $high, array $low, array $close, float $penetration = 0.3);
```

### `cdlgapsidesidewhite`

Up/Down-gap side-by-side white lines

``` php
$result = Trader::cdlgapsidesidewhite(array $open, array $high, array $low, array $close);
```

### `cdlgravestonedoji`

Gravestone Doji

``` php
$result = Trader::cdlgravestonedoji(array $open, array $high, array $low, array $close);
```

### `cdlhammer`

Hammer

``` php
$result = Trader::cdlhammer(array $open, array $high, array $low, array $close);
```

### `cdlhangingman`

Hanging Man

``` php
$result = Trader::cdlhangingman(array $open, array $high, array $low, array $close);
```

### `cdlharami`

Harami Pattern

``` php
$result = Trader::cdlharami(array $open, array $high, array $low, array $close);
```

### `cdlharamicross`

Harami Cross Pattern

``` php
$result = Trader::cdlharamicross(array $open, array $high, array $low, array $close);
```

### `cdlhighwave`

High-Wave Candle

``` php
$result = Trader::cdlhighwave(array $open, array $high, array $low, array $close);
```

### `cdlhikkake`

Hikkake Pattern

``` php
$result = Trader::cdlhikkake(array $open, array $high, array $low, array $close);
```

### `cdlhikkakemod`

Modified Hikkake Pattern

``` php
$result = Trader::cdlhikkakemod(array $open, array $high, array $low, array $close);
```

### `cdlhomingpigeon`

Homing Pigeon

``` php
$result = Trader::cdlhomingpigeon(array $open, array $high, array $low, array $close);
```

### `cdlidentical3crows`

Identical Three Crows

``` php
$result = Trader::cdlidentical3crows(array $open, array $high, array $low, array $close);
```

### `cdlinneck`

In-Neck Pattern

``` php
$result = Trader::cdlinneck(array $open, array $high, array $low, array $close);
```

### `cdlinvertedhammer`

Inverted Hammer

``` php
$result = Trader::cdlinvertedhammer(array $open, array $high, array $low, array $close);
```

### `cdlkicking`

Kicking

``` php
$result = Trader::cdlkicking(array $open, array $high, array $low, array $close);
```

### `cdlkickingbylength`

Kicking - bull/bear determined by the longer marubozu

``` php
$result = Trader::cdlkickingbylength(array $open, array $high, array $low, array $close);
```

### `cdlladderbottom`

Ladder Bottom

``` php
$result = Trader::cdlladderbottom(array $open, array $high, array $low, array $close);
```

### `cdllongleggeddoji`

Long Legged Doji

``` php
$result = Trader::cdllongleggeddoji(array $open, array $high, array $low, array $close);
```

### `cdllongline`

Long Line Candle

``` php
$result = Trader::cdllongline(array $open, array $high, array $low, array $close);
```

### `cdlmarubozu`

Marubozu

``` php
$result = Trader::cdlmarubozu(array $open, array $high, array $low, array $close);
```

### `cdlmatchinglow`

Matching Low

``` php
$result = Trader::cdlmatchinglow(array $open, array $high, array $low, array $close);
```

### `cdlmathold`

Mat Hold

``` php
$result = Trader::cdlmathold(array $open, array $high, array $low, array $close, float $penetration = 0.5);
```

### `cdlmorningdojistar`

Morning Doji Star

``` php
$result = Trader::cdlmorningdojistar(array $open, array $high, array $low, array $close, float $penetration = 0.3);
```

### `cdlmorningstar`

Morning Star

``` php
$result = Trader::cdlmorningstar(array $open, array $high, array $low, array $close, float $penetration = 0.3);
```

### `cdlonneck`

On-Neck Pattern

``` php
$result = Trader::cdlonneck(array $open, array $high, array $low, array $close);
```

### `cdlpiercing`

Piercing Pattern

``` php
$result = Trader::cdlpiercing(array $open, array $high, array $low, array $close);
```

### `cdlrickshawman`

Rickshaw Man

``` php
$result = Trader::cdlrickshawman(array $open, array $high, array $low, array $close);
```

### `cdlrisefall3methods`

Rising/Falling Three Methods

``` php
$result = Trader::cdlrisefall3methods(array $open, array $high, array $low, array $close);
```

### `cdlseparatinglines`

Separating Lines

``` php
$result = Trader::cdlseparatinglines(array $open, array $high, array $low, array $close);
```

### `cdlshootingstar`

Shooting Star

``` php
$result = Trader::cdlshootingstar(array $open, array $high, array $low, array $close);
```

### `cdlshortline`

Short Line Candle

``` php
$result = Trader::cdlshortline(array $open, array $high, array $low, array $close);
```

### `cdlspinningtop`

Spinning Top

``` php
$result = Trader::cdlspinningtop(array $open, array $high, array $low, array $close);
```

### `cdlstalledpattern`

Stalled Pattern

``` php
$result = Trader::cdlstalledpattern(array $open, array $high, array $low, array $close);
```

### `cdlsticksandwich`

Stick Sandwich

``` php
$result = Trader::cdlsticksandwich(array $open, array $high, array $low, array $close);
```

### `cdltakuri`

Takuri (Dragonfly Doji with very long lower shadow)

``` php
$result = Trader::cdltakuri(array $open, array $high, array $low, array $close);
```

### `cdltasukigap`

Tasuki Gap

``` php
$result = Trader::cdltasukigap(array $open, array $high, array $low, array $close);
```

### `cdlthrusting`

Thrusting Pattern

``` php
$result = Trader::cdlthrusting(array $open, array $high, array $low, array $close);
```


### `cdltristar`

Tristar Pattern

``` php
$result = Trader::cdltristar(array $open, array $high, array $low, array $close);
```

### `cdlunique3river`

Unique 3 River

``` php
$result = Trader::cdlunique3river(array $open, array $high, array $low, array $close);
```

### `cdlupsidegap2crows`

Upside Gap Two Crows

``` php
$result = Trader::cdlupsidegap2crows(array $open, array $high, array $low, array $close);
```

### `cdlxsidegap3methods`

Upside/Downside Gap Three Methods

``` php
$result = Trader::cdlxsidegap3methods(array $open, array $high, array $low, array $close);
```

### `ceil`

Vector Ceil

``` php
$result = Trader::ceil(array $real);
```

### `cmo`

Chande Momentum Oscillator

``` php
$result = Trader::cmo(array $real, int $timePeriod = 14);
```

### `correl`

Pearson's Correlation Coefficient (r)

``` php
$result = Trader::correl(array $real0, array $real1, int $timePeriod = 30);
```

### `cos`

Vector Trigonometric Cos

``` php
$result = Trader::cos(array $real);
```

### `cosh`

Vector Trigonometric Cosh

``` php
$result = Trader::cosh(array $real);
```

### `dema`

Double Exponential Moving Average

``` php
$result = Trader::dema(array $real, int $timePeriod = 30);
```

### `div`

Vector Arithmetic Div

``` php
$result = Trader::div(array $real0, array $real1);
```

### `dx`

Directional Movement Index

``` php
$result = Trader::dx(array $high, array $low, array $close, int $timePeriod = 14);
```

### `ema`

Exponential Moving Average

``` php
$result = Trader::ema(array $real, int $timePeriod = 30);
```

### `errno`

 Get error code
 
``` php
$result = Trader::errno();
```

### `exp`

Vector Arithmetic Exp

``` php
$result = Trader::exp(array $real);
```

### `floor`

Vector Floor

``` php
$result = Trader::floor(array $real);
```

### `get_compat`

Get compatibility mode

``` php
$result = Trader::get_compat();
```

### `get_unstable_period`

Get unstable period

``` php
$result = Trader::get_unstable_period(int $functionId);
```

### `ht_dcperiod`

Hilbert Transform - Dominant Cycle Period

``` php
$result = Trader::ht_dcperiod(array $real);
```

### `ht_dcphase`

Hilbert Transform - Dominant Cycle Phase

``` php
$result = Trader::ht_dcphase(array $real);
```

### `ht_phasor`

Hilbert Transform - Phasor Components

``` php
$result = Trader::ht_phasor(array $open, array $close);
```

### `ht_sine`

Hilbert Transform - SineWave

``` php
$result = Trader::ht_sine(array $open, array $close);
```

### `ht_trendline`

Hilbert Transform - Instantaneous Trendline

``` php
$result = Trader::ht_trendline(array $real);
```

### `ht_trendmode`

Hilbert Transform - Trend vs Cycle Mode

``` php
$result = Trader::ht_trendmode(array $real);
```

### `kama`

Kaufman Adaptive Moving Average

``` php
$result = Trader::kama(array $real, int $timePeriod = 30);
```

### `linearreg_angle`

Linear Regression Angle

``` php
$result = Trader::linearreg_angle(array $real, int $timePeriod = 14);
```

### `linearreg_intercept`

Linear Regression Intercept

``` php
$result = Trader::linearreg_intercept(array $real, int $timePeriod = 14);
```

### `linearreg_slope`

Linear Regression Slope

``` php
$result = Trader::linearreg_slope(array $real, int $timePeriod = 14);
```

### `linearreg`

Linear Regression

``` php
$result = Trader::linearreg(array $real, int $timePeriod = 14);
```

### `ln`

Vector Log Natural

``` php
$result = Trader::ln(array $real);
```

### `log10`

Vector Log10

``` php
$result = Trader::log10(array $real);
```

### `ma`

Moving average

``` php
$result = Trader::ma(array $real, int $timePeriod = 30, int $mAType = 0);
```

### `macd`

Moving Average Convergence/Divergence

``` php
$result = Trader::macd(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $signalPeriod = 9);
```

### `macdext`

MACD with controllable MA type

``` php
$result = Trader::macdext(array $real, int $fastPeriod = 12, int $fastMAType = 0, int $slowPeriod = 26, int $slowMAType = 0, int $signalPeriod = 9);
```

### `macdfix`

Moving Average Convergence/Divergence Fix 12/26

``` php
$result = Trader::macdfix(array $real, int $signalPeriod = 9);
```

### `mama`

MESA Adaptive Moving Average

``` php
$result = Trader::mama(array $real, float $fastLimit = 0.5, float $slowLimit = 0.05);
```

### `mavp`

Moving average with variable period

``` php
$result = Trader::mavp(array $real, array $periods, int $minPeriod = 2, int $maxPeriod = 30, int $mAType = 0);
```

### `max`

Highest value over a specified period

``` php
$result = Trader::max(array $real, int $timePeriod = 30);
```

### `maxindex`

Index of highest value over a specified period

``` php
$result = Trader::maxindex(array $real, int $timePeriod = 30);
```

### `medprice`

Median Price

``` php
$result = Trader::medprice(array $high, array $low);
```

### `mfi`

Money Flow Index

``` php
$result = Trader::mfi(array $high, array $low, array $close, array $volume, int $timePeriod = 14);
```

### `midpoint`

MidPoint over period

``` php
$result = Trader::midpoint(array $real, int $timePeriod = 14);
```

### `midprice`

Midpoint Price over period

``` php
$result = Trader::midprice(array $high, array $low, int $timePeriod = 14);
```

### `min`

Lowest value over a specified period

``` php
$result = Trader::min(array $real, int $timePeriod = 30);
```

### `minindex`

Index of lowest value over a specified period

``` php
$result = Trader::minindex(array $real, int $timePeriod = 30);
```

### `minmax`

Lowest and highest values over a specified period

``` php
$result = Trader::minmax(array $real, int $timePeriod = 30);
```

### `minmaxindex`

Indexes of lowest and highest values over a specified period

``` php
$result = Trader::minmaxindex(array $real, int $timePeriod = 30);
```

### `minus_di`

Minus Directional Indicator

``` php
$result = Trader::minus_di(array $high, array $low, array $close, int $timePeriod = 14);
```

### `minus_dm`

Minus Directional Movement

``` php
$result = Trader::minus_dm(array $high, array $low, int $timePeriod = 14);
```

### `mom`

Momentum

``` php
$result = Trader::mom(array $real, int $timePeriod = 10);
```

### `mult`

Vector Arithmetic Mult

``` php
$result = Trader::mult(array $real0, array $real1);
```

### `natr`

Normalized Average True Range

``` php
$result = Trader::natr(array $high, array $low, array $close, int $timePeriod = 14);
```

### `obv`

On Balance Volume

``` php
$result = Trader::obv(array $real, array $volume);
```

### `plus_di`

Plus Directional Indicator

``` php
$result = Trader::plus_di(array $high, array $low, array $close, int $timePeriod = 14);
```

### `plus_dm`

Plus Directional Movement

``` php
$result = Trader::plus_dm(array $high, array $low, int $timePeriod = 14);
```

### `ppo`

Percentage Price Oscillator

``` php
$result = Trader::ppo(array $real, int $fastPeriod = 12, int $slowPeriod = 26, int $mAType = 0);
```

### `roc`

Rate of change : ((price/prevPrice)-1)*100

``` php
$result = Trader::roc(array $real, int $timePeriod = 10);
```

### `rocp`

Rate of change Percentage: (price-prevPrice)/prevPrice

``` php
$result = Trader::rocp(array $real, int $timePeriod = 10);
```

### `rocr100`

Rate of change ratio 100 scale: (price/prevPrice)*100

``` php
$result = Trader::rocr100(array $real, int $timePeriod = 10);
```

### `rocr`

Rate of change ratio: (price/prevPrice)

``` php
$result = Trader::rocr(array $real, int $timePeriod = 10);
```

### `rsi`

Relative Strength Index

``` php
$result = Trader::rsi(array $real, int $timePeriod = 14);
```

### `sar`

Parabolic SAR

``` php
$result = Trader::sar(array $high, array $low, float $acceleration = 0.02, float $maximum = 0.2);
```

### `sarext`

Parabolic SAR - Extended

``` php
$result = Trader::sarext(array $high, array $low, float $startValue = 0.0, float $offsetOnReverse = 0.0, float $accelerationInitLong = 0.02, float $accelerationLong = 0.02, float $accelerationMaxLong = 0.2, float $accelerationInitShort = 0.02, float $accelerationShort = 0.02, float $accelerationMaxShort = 0.2);
```

### `set_compat`

Set compatibility mode

``` php
Trader::set_compat(int $compatId);
```

### `set_unstable_period`

Set unstable period

``` php
Trader::set_unstable_period(int $functionId, int $timePeriod);
```

### `sin`

Vector Trigonometric Sin

``` php
$result = Trader::sin(array $real);
```

### `sinh`

Vector Trigonometric Sinh

``` php
$result = Trader::sinh(array $real);
```

### `sma`

Simple Moving Average

``` php
$result = Trader::sma(array $real, int $timePeriod = 30);
```

### `sqrt`

Vector Square Root

``` php
$result = Trader::sqrt(array $real);
```

### `stddev`

Standard Deviation

``` php
$result = Trader::stddev(array $real, int $timePeriod = 5, float $nbDev = 1.0);
```

### `stoch`

Stochastic

``` php
$result = Trader::stoch(array $high, array $low, array $close, int $fastK_Period = 5, int $slowK_Period = 3, int $slowK_MAType = 0, int $slowD_Period = 3, int $slowD_MAType = 0);
```

### `stochf`

Stochastic Fast

``` php
$result = Trader::stochf(array $high, array $low, array $close, int $fastK_Period = 5, int $fastD_Period = 3, int $fastD_MAType = 0);
```

### `stochrsi`

Stochastic Relative Strength Index

``` php
$result = Trader::stochrsi(array $real, int $timePeriod = 14, int $fastK_Period = 5, int $fastD_Period = 3, int $fastD_MAType = 0);
```

### `sub`

Vector Arithmetic Subtraction

``` php
$result = Trader::sub(array $real0, array $real1);
```

### `sum`

Summation

``` php
$result = Trader::sum(array $real, int $timePeriod = 30);
```

### `t3`

Triple Exponential Moving Average (T3)

``` php
$result = Trader::t3(array $real, int $timePeriod = 5, float $vFactor = 0.7);
```

### `tan`

Vector Trigonometric Tan

``` php
$result = Trader::tan(array $real);
```

### `tanh`

Vector Trigonometric Tanh

``` php
$result = Trader::tanh(array $real);
```

### `tema`

Triple Exponential Moving Average

``` php
$result = Trader::tema(array $real, int $timePeriod = 30);
```

### `trange`

True Range

``` php
$result = Trader::trange(array $high, array $low, array $close);
```

### `trima`

Triangular Moving Average

``` php
$result = Trader::trima(array $real, int $timePeriod = 30);
```

### `trix`

1-day Rate-Of-Change (ROC) of a Triple Smooth EMA

``` php
$result = Trader::trix(array $real, int $timePeriod = 30);
```

### `tsf`

Time Series Forecast

``` php
$result = Trader::tsf(array $real, int $timePeriod = 14);
```

### `typprice`

Typical Price

``` php
$result = Trader::typprice(array $high, array $low, array $close);
```

### `ultosc`

Ultimate Oscillator

``` php
$result = Trader::ultosc(array $high, array $low, array $close, int $timePeriod1 = 7, int $timePeriod2 = 14, int $timePeriod3 = 28);
```

### `var`

Variance

``` php
$result = Trader::var(array $real, int $timePeriod = 5, float $nbDev = 1.0);
```

### `wclprice`

Weighted Close Price

``` php
$result = Trader::wclprice(array $high, array $low, array $close);
```

### `willr`

Williams' %R

``` php
$result = Trader::willr(array $high, array $low, array $close, int $timePeriod = 14);
```

### `wma`

Weighted Moving Average

``` php
$result = Trader::wma(array $real, int $timePeriod = 30);
```

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please use the issue tracker.

## Credits

- [Evgenii Nasyrov](https://github.com/nasyrov)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/laratrade/trader.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/laratrade/trader/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/laratrade/trader.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/laratrade/trader.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/laratrade/trader.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/laratrade/trader
[link-travis]: https://travis-ci.org/laratrade/trader
[link-scrutinizer]: https://scrutinizer-ci.com/g/laratrade/trader/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/laratrade/trader
[link-downloads]: https://packagist.org/packages/laratrade/trader
[link-contributors]: ../../contributors
