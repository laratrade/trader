# Laratrade Trader

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

use Laratrade\Trader\Contracts\Trader;

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

use Laratrade\Trader\Facades\Trader;

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

## Functions

- [`acos`](#acos)
- [`ad`](#ad)
- [`add`](#add)
- [`adosc`](#adosc)
- [`adx`](#adx)
- [`adxr`](#adxr)
- [`apo`](#apo)
- [`aroon`](#aroon)
- [`aroonosc`](#aroonosc)
- [`asin`](#asin)
- [`atan`](#atan)
- [`atr`](#atr)
- [`avgprice`](#avgprice)
- [`bbands`](#bbands)
- [`beta`](#beta)
- [`bop`](#bop)
- [`cci`](#cci)
- [`cdl2crows`](#cdl2crows)
- [`cdl3blackcrows`](#cdl3blackcrows)
- [`cdl3inside`](#cdl3inside)
- [`cdl3linestrike`](#cdl3linestrike)
- [`cdl3outside`](#cdl3outside)
- [`cdl3starsinsouth`](#cdl3starsinsouth)
- [`cdl3whitesoldiers`](#cdl3whitesoldiers)
- [`cdlabandonedbaby`](#cdlabandonedbaby)
- [`cdladvanceblock`](#cdladvanceblock)
- [`cdlbelthold`](#cdlbelthold)
- [`cdlbreakaway`](#cdlbreakaway)
- [`cdlclosingmarubozu`](#cdlclosingmarubozu)
- [`cdlconcealbabyswall`](#cdlconcealbabyswall)
- [`cdlcounterattack`](#cdlcounterattack)
- [`cdldarkcloudcover`](#cdldarkcloudcover)
- [`cdldoji`](#cdldoji)
- [`cdldojistar`](#cdldojistar)
- [`cdldragonflydoji`](#cdldragonflydoji)
- [`cdlengulfing`](#cdlengulfing)
- [`cdleveningdojistar`](#cdleveningdojistar)
- [`cdleveningstar`](#cdleveningstar)
- [`cdlgapsidesidewhite`](#cdlgapsidesidewhite)
- [`cdlgravestonedoji`](#cdlgravestonedoji)
- [`cdlhammer`](#cdlhammer)
- [`cdlhangingman`](#cdlhangingman)
- [`cdlharami`](#cdlharami)
- [`cdlharamicross`](#cdlharamicross)
- [`cdlhighwave`](#cdlhighwave)
- [`cdlhikkake`](#cdlhikkake)
- [`cdlhikkakemod`](#cdlhikkakemod)
- [`cdlhomingpigeon`](#cdlhomingpigeon)
- [`cdlidentical3crows`](#cdlidentical3crows)
- [`cdlinneck`](#cdlinneck)
- [`cdlinvertedhammer`](#cdlinvertedhammer)
- [`cdlkicking`](#cdlkicking)
- [`cdlkickingbylength`](#cdlkickingbylength)
- [`cdlladderbottom`](#cdlladderbottom)
- [`cdllongleggeddoji`](#cdllongleggeddoji)
- [`cdllongline`](#cdllongline)
- [`cdlmarubozu`](#cdlmarubozu)
- [`cdlmatchinglow`](#cdlmatchinglow)
- [`cdlmathold`](#cdlmathold)
- [`cdlmorningdojistar`](#cdlmorningdojistar)
- [`cdlmorningstar`](#cdlmorningstar)
- [`cdlonneck`](#cdlonneck)
- [`cdlpiercing`](#cdlpiercing)
- [`cdlrickshawman`](#cdlrickshawman)
- [`cdlrisefall3methods`](#cdlrisefall3methods)
- [`cdlseparatinglines`](#cdlseparatinglines)
- [`cdlshootingstar`](#cdlshootingstar)
- [`cdlshortline`](#cdlshortline)
- [`cdlspinningtop`](#cdlspinningtop)
- [`cdlstalledpattern`](#cdlstalledpattern)
- [`cdlsticksandwich`](#cdlsticksandwich)
- [`cdltakuri`](#cdltakuri)
- [`cdltasukigap`](#cdltasukigap)
- [`cdlthrusting`](#cdlthrusting)
- [`cdltristar`](#cdltristar)
- [`cdlunique3river`](#cdlunique3river)
- [`cdlupsidegap2crows`](#cdlupsidegap2crows)
- [`cdlxsidegap3methods`](#cdlxsidegap3methods)
- [`ceil`](#ceil)
- [`cmo`](#cmo)
- [`correl`](#correl)
- [`cos`](#cos)
- [`cosh`](#cosh)
- [`dema`](#dema)
- [`div`](#div)
- [`dx`](#dx)
- [`ema`](#ema)
- [`errno`](#errno)
- [`exp`](#exp)
- [`floor`](#floor)
- [`get_compat`](#get_compat)
- [`get_unstable_period`](#get_unstable_period)
- [`ht_dcperiod`](#ht_dcperiod)
- [`ht_dcphase`](#ht_dcphase)
- [`ht_phasor`](#ht_phasor)
- [`ht_sine`](#ht_sine)
- [`ht_trendline`](#ht_trendline)
- [`ht_trendmode`](#ht_trendmode)
- [`kama`](#kama)
- [`linearreg_angle`](#linearreg_angle)
- [`linearreg_intercept`](#linearreg_intercept)
- [`linearreg_slope`](#linearreg_slope)
- [`linearreg`](#linearreg)
- [`ln`](#ln)
- [`log10`](#log10)
- [`ma`](#ma)
- [`macd`](#macd)
- [`macdext`](#macdext)
- [`macdfix`](#macdfix)
- [`mama`](#mama)
- [`mavp`](#mavp)
- [`max`](#max)
- [`maxindex`](#maxindex)
- [`medprice`](#medprice)
- [`mfi`](#mfi)
- [`midpoint`](#midpoint)
- [`midprice`](#midprice)
- [`min`](#min)
- [`minindex`](#minindex)
- [`minmax`](#minmax)
- [`minmaxindex`](#minmaxindex)
- [`minus_di`](#minus_di)
- [`minus_dm`](#minus_dm)
- [`mom`](#mom)
- [`mult`](#mult)
- [`natr`](#natr)
- [`obv`](#obv)
- [`plus_di`](#plus_di)
- [`plus_dm`](#plus_dm)
- [`ppo`](#ppo)
- [`roc`](#roc)
- [`rocp`](#rocp)
- [`rocr100`](#rocr100)
- [`rocr`](#rocr)
- [`rsi`](#rsi)
- [`sar`](#sar)
- [`sarext`](#sarext)
- [`set_compat`](#set_compat)
- [`set_unstable_period`](#set_unstable_period)
- [`sin`](#sin)
- [`sinh`](#sinh)
- [`sma`](#sma)
- [`sqrt`](#sqrt)
- [`stddev`](#stddev)
- [`stoch`](#stoch)
- [`stochf`](#stochf)
- [`stochrsi`](#stochrsi)
- [`sub`](#sub)
- [`sum`](#sum)
- [`t3`](#t3)
- [`tan`](#tan)
- [`tanh`](#tanh)
- [`tema`](#tema)
- [`trange`](#trange)
- [`trima`](#trima)
- [`trix`](#trix)
- [`tsf`](#tsf)
- [`typprice`](#typprice)
- [`ultosc`](#ultosc)
- [`var`](#var)
- [`wclprice`](#wclprice)
- [`willr`](#willr)
- [`wma`](#wma)

### `acos`

Vector Trigonometric ACos

``` php
$acos = Trader::acos($real);
```

### `ad`

Chaikin A/D Line

``` php
$ad = Trader::ad($real);
```

### `add`

Vector Arithmetic Add

``` php
$add = Trader::add($real);
```

### `adosc`

Chaikin A/D Oscillator

``` php
$add = Trader::add($real);
```

### `adx`

Average Directional Movement Index

``` php
$adx = Trader::adx($real);
```

### `adxr`

Average Directional Movement Index Rating

``` php
$adx = Trader::adx($real);
```

### `apo`

Absolute Price Oscillator

``` php
$adx = Trader::apo($real);
```

### `aroon`

Aroon

### `aroonosc`

Aroon Oscillator

### `asin`

Vector Trigonometric ASin

### `atan`

Vector Trigonometric ATan

### `atr`

Average True Range

### `avgprice`

Average Price

### `bbands`

Bollinger Bands

### `beta`

Beta

### `bop`

Balance Of Power

### `cci`

Commodity Channel Index

### `cdl2crows`

Two Crows

### `cdl3blackcrows`

Three Black Crows

### `cdl3inside`

Three Inside Up/Down

### `cdl3linestrike`

Three-Line Strike

### `cdl3outside`

Three Outside Up/Down

### `cdl3starsinsouth`

Three Stars In The South

### `cdl3whitesoldiers`

Three Advancing White Soldiers

### `cdlabandonedbaby`

Abandoned Baby

### `cdladvanceblock`

Advance Block

### `cdlbelthold`

Belt-hold

### `cdlbreakaway`

Breakaway

### `cdlclosingmarubozu`

Closing Marubozu

### `cdlconcealbabyswall`

Concealing Baby Swallow

### `cdlcounterattack`

Counterattack

### `cdldarkcloudcover`

Dark Cloud Cover

### `cdldoji`

Doji

### `cdldojistar`

Doji Star

### `cdldragonflydoji`

Dragonfly Doji

### `cdlengulfing`

Engulfing Pattern

### `cdleveningdojistar`

Evening Doji Star

### `cdleveningstar`

Evening Star

### `cdlgapsidesidewhite`

Up/Down-gap side-by-side white lines

### `cdlgravestonedoji`

Gravestone Doji

### `cdlhammer`

Hammer

### `cdlhangingman`

Hanging Man

### `cdlharami`

Harami Pattern

### `cdlharamicross`

Harami Cross Pattern

### `cdlhighwave`

High-Wave Candle

### `cdlhikkake`

Hikkake Pattern

### `cdlhikkakemod`

Modified Hikkake Pattern

### `cdlhomingpigeon`

Homing Pigeon

### `cdlidentical3crows`

Identical Three Crows

### `cdlinneck`

In-Neck Pattern

### `cdlinvertedhammer`

Inverted Hammer

### `cdlkicking`

Kicking

### `cdlkickingbylength`

Kicking - bull/bear determined by the longer marubozu

### `cdlladderbottom`

Ladder Bottom

### `cdllongleggeddoji`

Long Legged Doji

### `cdllongline`

Long Line Candle

### `cdlmarubozu`

Marubozu

### `cdlmatchinglow`

Matching Low

### `cdlmathold`

Mat Hold

### `cdlmorningdojistar`

Morning Doji Star

### `cdlmorningstar`

Morning Star

### `cdlonneck`

On-Neck Pattern

### `cdlpiercing`

Piercing Pattern

### `cdlrickshawman`

Rickshaw Man

### `cdlrisefall3methods`

Rising/Falling Three Methods

### `cdlseparatinglines`

Separating Lines

### `cdlshootingstar`

Shooting Star

### `cdlshortline`

Short Line Candle

### `cdlspinningtop`

Spinning Top

### `cdlstalledpattern`

Stalled Pattern

### `cdlsticksandwich`

Stick Sandwich

### `cdltakuri`

Takuri (Dragonfly Doji with very long lower shadow)

### `cdltasukigap`

Tasuki Gap

### `cdlthrusting`

Thrusting Pattern

### `cdltristar`

Tristar Pattern

### `cdlunique3river`

Unique 3 River

### `cdlupsidegap2crows`

Upside Gap Two Crows

### `cdlxsidegap3methods`

Upside/Downside Gap Three Methods

### `ceil`

Vector Ceil

### `cmo`

Chande Momentum Oscillator

### `correl`

Pearson's Correlation Coefficient (r)

### `cos`

Vector Trigonometric Cos

### `cosh`

Vector Trigonometric Cosh

### `dema`

Double Exponential Moving Average

### `div`

Vector Arithmetic Div

### `dx`

Directional Movement Index

### `ema`

Exponential Moving Average

### `errno`

 Get error code

### `exp`

Vector Arithmetic Exp

### `floor`

Vector Floor

### `get_compat`

Get compatibility mode

### `get_unstable_period`

Get unstable period

### `ht_dcperiod`

Hilbert Transform - Dominant Cycle Period

### `ht_dcphase`

Hilbert Transform - Dominant Cycle Phase

### `ht_phasor`

Hilbert Transform - Phasor Components

### `ht_sine`

Hilbert Transform - SineWave

### `ht_trendline`

Hilbert Transform - Instantaneous Trendline

### `ht_trendmode`

Hilbert Transform - Trend vs Cycle Mode

### `kama`

Kaufman Adaptive Moving Average

### `linearreg_angle`

Linear Regression Angle

### `linearreg_intercept`

Linear Regression Intercept

### `linearreg_slope`

Linear Regression Slope

### `linearreg`

Linear Regression

### `ln`

Vector Log Natural

### `log10`

Vector Log10

### `ma`

Moving average

### `macd`

Moving Average Convergence/Divergence

### `macdext`

MACD with controllable MA type

### `macdfix`

Moving Average Convergence/Divergence Fix 12/26

### `mama`

MESA Adaptive Moving Average

### `mavp`

Moving average with variable period

### `max`

Highest value over a specified period

### `maxindex`

Index of highest value over a specified period

### `medprice`

Median Price

### `mfi`

Money Flow Index

### `midpoint`

MidPoint over period

### `midprice`

Midpoint Price over period

### `min`

Lowest value over a specified period

### `minindex`

Index of lowest value over a specified period

### `minmax`

Lowest and highest values over a specified period

### `minmaxindex`

Indexes of lowest and highest values over a specified period

### `minus_di`

Minus Directional Indicator

### `minus_dm`

Minus Directional Movement

### `mom`

Momentum

### `mult`

Vector Arithmetic Mult

### `natr`

Normalized Average True Range

### `obv`

On Balance Volume

### `plus_di`

Plus Directional Indicator

### `plus_dm`

Plus Directional Movement

### `ppo`

Percentage Price Oscillator

### `roc`

Rate of change : ((price/prevPrice)-1)*100

### `rocp`

Rate of change Percentage: (price-prevPrice)/prevPrice

### `rocr100`

Rate of change ratio 100 scale: (price/prevPrice)*100

### `rocr`

Rate of change ratio: (price/prevPrice)

### `rsi`

Relative Strength Index

### `sar`

Parabolic SAR

### `sarext`

Parabolic SAR - Extended

### `set_compat`

Set compatibility mode

### `set_unstable_period`

Set unstable period

### `sin`

Vector Trigonometric Sin

### `sinh`

Vector Trigonometric Sinh

### `sma`

Simple Moving Average

### `sqrt`

Vector Square Root

### `stddev`

Standard Deviation

### `stoch`

Stochastic

### `stochf`

Stochastic Fast

### `stochrsi`

Stochastic Relative Strength Index

### `sub`

Vector Arithmetic Subtraction

### `sum`

Summation

### `t3`

Triple Exponential Moving Average (T3)

### `tan`

Vector Trigonometric Tan

### `tanh`

Vector Trigonometric Tanh

### `tema`

Triple Exponential Moving Average

### `trange`

True Range

### `trima`

Triangular Moving Average

### `trix`

1-day Rate-Of-Change (ROC) of a Triple Smooth EMA

### `tsf`

Time Series Forecast

### `typprice`

Typical Price

### `ultosc`

Ultimate Oscillator

### `var`

Variance

### `wclprice`

Weighted Close Price

### `willr`

Williams' %R

### `wma`

Weighted Moving Average

## Testing

``` bash
$ composer test
```

## Security

If you discover any security related issues, please use the issue tracker.

## Credits

- [Evgenii Nasyrov](https://github.com/nasyrov)
- [Patrick Teunissen](https://github.com/amavis442)
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
