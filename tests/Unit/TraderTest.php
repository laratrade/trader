<?php

namespace Laratrade\Trader\Tests\Unit;

use BadFunctionCallException;
use Laratrade\Trader\Trader;
use ReflectionClass;

class TraderTest extends TestCase
{
    /**
     * @var array
     */
    protected static $open;

    /**
     * @var array
     */
    protected static $high;

    /**
     * @var array
     */
    protected static $low;

    /**
     * @var array
     */
    protected static $close;

    /**
     * @var array
     */
    protected static $volume;

    /**
     * @var Trader
     */
    protected static $trader;

    /**
     * @inheritdoc
     */
    public static function setUpBeforeClass(): void
    {
        $ohlcv = json_decode(file_get_contents(
            __DIR__ . '/ohlcv.json'
        ), true);

        static::$open   = array_column($ohlcv, 'open');
        static::$high   = array_column($ohlcv, 'high');
        static::$low    = array_column($ohlcv, 'low');
        static::$close  = array_column($ohlcv, 'close');
        static::$volume = array_column($ohlcv, 'volume');

        static::$trader = new Trader;
    }

    /** @test */
    public function it_provides_correct_constant_values()
    {
        $constants = (new ReflectionClass(static::$trader))->getConstants();

        foreach ($constants as $constant => $value) {
            $this->assertEquals(
                constant(sprintf('TRADER_%s', $constant)),
                $value
            );
        }
    }

    /** @test */
    public function it_executes_acos_method_correctly()
    {
        $close = array_map('cos', static::$close);

        $this->assertEquals(
            trader_acos($close),
            static::$trader->acos($close)
        );
    }

    /** @test */
    public function it_executes_ad_method_correctly()
    {
        $this->assertEquals(
            trader_ad(static::$high, static::$low, static::$close, static::$volume),
            static::$trader->ad(static::$high, static::$low, static::$close, static::$volume)
        );
    }

    /** @test */
    public function it_executes_add_correctly()
    {
        $this->assertEquals(
            trader_add(static::$high, static::$low),
            static::$trader->add(static::$high, static::$low)
        );
    }

    /** @test */
    public function it_executes_adosc_correctly()
    {
        $this->assertEquals(
            trader_adosc(static::$high, static::$low, static::$close, static::$volume, 3, 10),
            static::$trader->adosc(static::$high, static::$low, static::$close, static::$volume, 3, 10)
        );
    }

    /** @test */
    public function it_executes_adx_correctly()
    {
        $this->assertEquals(
            trader_adx(static::$high, static::$low, static::$close, 14),
            static::$trader->adx(static::$high, static::$low, static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_adxr_correctly()
    {
        $this->assertEquals(
            trader_adxr(static::$high, static::$low, static::$close, 14),
            static::$trader->adxr(static::$high, static::$low, static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_apo_correctly()
    {
        $this->assertEquals(
            trader_apo(static::$close, 12, 26, TRADER_MA_TYPE_SMA),
            static::$trader->apo(static::$close, 12, 26, TRADER_MA_TYPE_SMA)
        );
    }

    /** @test */
    public function it_executes_aroon_correctly()
    {
        $this->assertEquals(
            trader_aroon(static::$high, static::$low, 14),
            static::$trader->aroon(static::$high, static::$low, 14)
        );
    }

    /** @test */
    public function it_executes_arronosc_correctly()
    {
        $this->assertEquals(
            trader_aroonosc(static::$high, static::$low, 14),
            static::$trader->aroonosc(static::$high, static::$low, 14)
        );
    }

    /** @test */
    public function it_executes_asin_correctly()
    {
        $this->assertEquals(
            trader_asin(array_map('sin', static::$close)),
            static::$trader->asin(array_map('sin', static::$close))
        );
    }

    /** @test */
    public function it_executes_atan_correctly()
    {
        $this->assertEquals(
            trader_atan(array_map('tan', static::$close)),
            static::$trader->atan(array_map('tan', static::$close))
        );
    }

    /** @test */
    public function it_executes_atr_correctly()
    {
        $this->assertEquals(
            trader_atr(static::$high, static::$low, static::$close, 14),
            static::$trader->atr(static::$high, static::$low, static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_avgprice_correctly()
    {
        $this->assertEquals(
            trader_avgprice(static::$open, static::$high, static::$low, static::$close),
            static::$trader->avgprice(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_bbands_correctly()
    {
        $this->assertEquals(
            trader_bbands(static::$close, 5, 2.0, 2.0, TRADER_MA_TYPE_SMA),
            static::$trader->bbands(static::$close, 5, 2.0, 2.0, TRADER_MA_TYPE_SMA)
        );
    }

    /** @test */
    public function it_executes_beta_correctly()
    {
        $this->assertEquals(
            trader_beta(static::$open, static::$close, 5),
            static::$trader->beta(static::$open, static::$close, 5)
        );
    }

    /** @test */
    public function it_executes_bop_correctly()
    {
        $this->assertEquals(
            trader_bop(static::$open, static::$high, static::$low, static::$close),
            static::$trader->bop(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cci_correctly()
    {
        $this->assertEquals(
            trader_cci(static::$high, static::$low, static::$close, 14),
            static::$trader->cci(static::$high, static::$low, static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_cdl2crows_correctly()
    {
        $this->assertEquals(
            trader_cdl2crows(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdl2crows(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdl3blackcrows_correctly()
    {
        $this->assertEquals(
            trader_cdl3blackcrows(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdl3blackcrows(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdl3inside_correctly()
    {
        $this->assertEquals(
            trader_cdl3inside(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdl3inside(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdl3linestrike_correctly()
    {
        $this->assertEquals(
            trader_cdl3linestrike(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdl3linestrike(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdl3outside_correctly()
    {
        $this->assertEquals(
            trader_cdl3outside(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdl3outside(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdl3starsinsouth_correctly()
    {
        $this->assertEquals(
            trader_cdl3starsinsouth(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdl3starsinsouth(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdl3whitesoldiers_correctly()
    {
        $this->assertEquals(
            trader_cdl3whitesoldiers(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdl3whitesoldiers(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlabandonedbaby_correctly()
    {
        $this->assertEquals(
            trader_cdlabandonedbaby(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlabandonedbaby(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdladvanceblock_correctly()
    {
        $this->assertEquals(
            trader_cdladvanceblock(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdladvanceblock(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlbelthold_correctly()
    {
        $this->assertEquals(
            trader_cdlbelthold(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlbelthold(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlbreakaway_correctly()
    {
        $this->assertEquals(
            trader_cdlbreakaway(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlbreakaway(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlclosingmarubozu_correctly()
    {
        $this->assertEquals(
            trader_cdlclosingmarubozu(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlclosingmarubozu(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlconcealbabyswall_correctly()
    {
        $this->assertEquals(
            trader_cdlconcealbabyswall(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlconcealbabyswall(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlcounterattack_correctly()
    {
        $this->assertEquals(
            trader_cdlcounterattack(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlcounterattack(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdldarkcloudcover_correctly()
    {
        $this->assertEquals(
            trader_cdldarkcloudcover(static::$open, static::$high, static::$low, static::$close, 0.5),
            static::$trader->cdldarkcloudcover(static::$open, static::$high, static::$low, static::$close, 0.5)
        );
    }

    /** @test */
    public function it_executes_cdldoji_correctly()
    {
        $this->assertEquals(
            trader_cdldoji(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdldoji(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdldojistar_correctly()
    {
        $this->assertEquals(
            trader_cdldojistar(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdldojistar(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdldragonflydoji_correctly()
    {
        $this->assertEquals(
            trader_cdldragonflydoji(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdldragonflydoji(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlengulfing_correctly()
    {
        $this->assertEquals(
            trader_cdlengulfing(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlengulfing(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdleveningdojistar_correctly()
    {
        $this->assertEquals(
            trader_cdleveningdojistar(static::$open, static::$high, static::$low, static::$close, 0.3),
            static::$trader->cdleveningdojistar(static::$open, static::$high, static::$low, static::$close, 0.3)
        );
    }

    /** @test */
    public function it_executes_cdleveningstar_correctly()
    {
        $this->assertEquals(
            trader_cdleveningstar(static::$open, static::$high, static::$low, static::$close, 0.3),
            static::$trader->cdleveningstar(static::$open, static::$high, static::$low, static::$close, 0.3)
        );
    }

    /** @test */
    public function it_executes_cdlgapsidesidewhite_correctly()
    {
        $this->assertEquals(
            trader_cdlgapsidesidewhite(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlgapsidesidewhite(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlgravestonedoji_correctly()
    {
        $this->assertEquals(
            trader_cdlgravestonedoji(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlgravestonedoji(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlhammer_correctly()
    {
        $this->assertEquals(
            trader_cdlhammer(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlhammer(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlhangingman_correctly()
    {
        $this->assertEquals(
            trader_cdlhangingman(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlhangingman(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlharami_correctly()
    {
        $this->assertEquals(
            trader_cdlharami(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlharami(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlharamicross_correctly()
    {
        $this->assertEquals(
            trader_cdlharamicross(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlharamicross(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlhighwave_correctly()
    {
        $this->assertEquals(
            trader_cdlhighwave(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlhighwave(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlhikkake_correctly()
    {
        $this->assertEquals(
            trader_cdlhikkake(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlhikkake(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlhikkakemod_correctly()
    {
        $this->assertEquals(
            trader_cdlhikkakemod(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlhikkakemod(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlhomingpigeon_correctly()
    {
        $this->assertEquals(
            trader_cdlhomingpigeon(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlhomingpigeon(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlidentical3crows_correctly()
    {
        $this->assertEquals(
            trader_cdlidentical3crows(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlidentical3crows(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlinneck_correctly()
    {
        $this->assertEquals(
            trader_cdlinneck(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlinneck(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlinvertedhammer_correctly()
    {
        $this->assertEquals(
            trader_cdlinvertedhammer(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlinvertedhammer(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlkicking_correctly()
    {
        $this->assertEquals(
            trader_cdlkicking(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlkicking(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlkickingbylength_correctly()
    {
        $this->assertEquals(
            trader_cdlkickingbylength(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlkickingbylength(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlladderbottom_correctly()
    {
        $this->assertEquals(
            trader_cdlladderbottom(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlladderbottom(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdllongleggeddoji_correctly()
    {
        $this->assertEquals(
            trader_cdllongleggeddoji(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdllongleggeddoji(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdllongline_correctly()
    {
        $this->assertEquals(
            trader_cdllongline(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdllongline(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlmarubozu_correctly()
    {
        $this->assertEquals(
            trader_cdlmarubozu(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlmarubozu(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlmatchinglow_correctly()
    {
        $this->assertEquals(
            trader_cdlmatchinglow(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlmatchinglow(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlmathold_correctly()
    {
        $this->assertEquals(
            trader_cdlmathold(static::$open, static::$high, static::$low, static::$close, 0.5),
            static::$trader->cdlmathold(static::$open, static::$high, static::$low, static::$close, 0.5)
        );
    }

    /** @test */
    public function it_executes_cdlmorningdojistar_correctly()
    {
        $this->assertEquals(
            trader_cdlmorningdojistar(static::$open, static::$high, static::$low, static::$close, 0.3),
            static::$trader->cdlmorningdojistar(static::$open, static::$high, static::$low, static::$close, 0.3)
        );
    }

    /** @test */
    public function it_executes_cdlmorningstar_correctly()
    {
        $this->assertEquals(
            trader_cdlmorningstar(static::$open, static::$high, static::$low, static::$close, 0.3),
            static::$trader->cdlmorningstar(static::$open, static::$high, static::$low, static::$close, 0.3)
        );
    }

    /** @test */
    public function it_executes_cdlonneck_correctly()
    {
        $this->assertEquals(
            trader_cdlonneck(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlonneck(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlpiercing_correctly()
    {
        $this->assertEquals(
            trader_cdlpiercing(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlpiercing(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlrickshawman_correctly()
    {
        $this->assertEquals(
            trader_cdlrickshawman(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlrickshawman(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlrisefall3methods_correctly()
    {
        $this->assertEquals(
            trader_cdlrisefall3methods(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlrisefall3methods(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlseparatinglines_correctly()
    {
        $this->assertEquals(
            trader_cdlseparatinglines(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlseparatinglines(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlshootingstar_correctly()
    {
        $this->assertEquals(
            trader_cdlshootingstar(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlshootingstar(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlshortline_correctly()
    {
        $this->assertEquals(
            trader_cdlshortline(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlshortline(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlspinningtop_correctly()
    {
        $this->assertEquals(
            trader_cdlspinningtop(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlspinningtop(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlstalledpattern_correctly()
    {
        $this->assertEquals(
            trader_cdlstalledpattern(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlstalledpattern(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlsticksandwich_correctly()
    {
        $this->assertEquals(
            trader_cdlsticksandwich(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlsticksandwich(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdltakuri_correctly()
    {
        $this->assertEquals(
            trader_cdltakuri(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdltakuri(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdltasukigap_correctly()
    {
        $this->assertEquals(
            trader_cdltasukigap(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdltasukigap(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlthrusting_correctly()
    {
        $this->assertEquals(
            trader_cdlthrusting(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlthrusting(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdltristar_correctly()
    {
        $this->assertEquals(
            trader_cdltristar(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdltristar(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlunique3river_correctly()
    {
        $this->assertEquals(
            trader_cdlunique3river(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlunique3river(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlupsidegap2crows_correctly()
    {
        $this->assertEquals(
            trader_cdlupsidegap2crows(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlupsidegap2crows(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_cdlxsidegap3methods_correctly()
    {
        $this->assertEquals(
            trader_cdlxsidegap3methods(static::$open, static::$high, static::$low, static::$close),
            static::$trader->cdlxsidegap3methods(static::$open, static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_ceil_correctly()
    {
        $this->assertEquals(
            trader_ceil(static::$close),
            static::$trader->ceil(static::$close)
        );
    }

    /** @test */
    public function it_executes_cmo_correctly()
    {
        $this->assertEquals(
            trader_cmo(static::$close, 14),
            static::$trader->cmo(static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_correl_correctly()
    {
        $this->assertEquals(
            trader_correl(static::$open, static::$close, 30),
            static::$trader->correl(static::$open, static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_cos_correctly()
    {
        $this->assertEquals(
            trader_cos(static::$close),
            static::$trader->cos(static::$close)
        );
    }

    /** @test */
    public function it_executes_cosh_correctly()
    {
        $this->assertEquals(
            trader_cosh(static::$close),
            static::$trader->cosh(static::$close)
        );
    }

    /** @test */
    public function it_executes_dema_correctly()
    {
        $this->assertEquals(
            trader_dema(static::$close, 30),
            static::$trader->dema(static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_div_correctly()
    {
        $this->assertEquals(
            trader_div(static::$open, static::$close),
            static::$trader->div(static::$open, static::$close)
        );
    }

    /** @test */
    public function it_executes_dx_correctly()
    {
        $this->assertEquals(
            trader_dx(static::$high, static::$low, static::$close, 14),
            static::$trader->dx(static::$high, static::$low, static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_ema_correctly()
    {
        $this->assertEquals(
            trader_ema(static::$close, 30),
            static::$trader->ema(static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_errno_correctly()
    {
        $this->assertEquals(
            trader_errno(),
            static::$trader->errno()
        );
    }

    /** @test */
    public function it_executes_exp_correctly()
    {
        $this->assertEquals(
            trader_exp(static::$close),
            static::$trader->exp(static::$close)
        );
    }

    /** @test */
    public function it_executes_floor_correctly()
    {
        $this->assertEquals(
            trader_floor(static::$close),
            static::$trader->floor(static::$close)
        );
    }

    /** @test */
    public function it_executes_get_compat_correctly()
    {
        $this->assertEquals(
            trader_get_compat(),
            static::$trader->get_compat()
        );
    }

    /** @test */
    public function it_executes_get_unstable_period_correctly()
    {
        $this->assertEquals(
            trader_get_unstable_period(TRADER_FUNC_UNST_ADX),
            static::$trader->get_unstable_period(TRADER_FUNC_UNST_ADX)
        );
    }

    /** @test */
    public function it_executes_ht_dcperiod_correctly()
    {
        $this->assertEquals(
            trader_ht_dcperiod(static::$close),
            static::$trader->ht_dcperiod(static::$close)
        );
    }

    /** @test */
    public function it_executes_ht_dcphase_correctly()
    {
        $this->assertEquals(
            trader_ht_dcphase(static::$close),
            static::$trader->ht_dcphase(static::$close)
        );
    }

    /** @test */
    public function it_executes_ht_phasor_correctly()
    {
        $this->assertEquals(
            trader_ht_phasor(static::$close),
            static::$trader->ht_phasor(static::$close)
        );
    }

    /** @test */
    public function it_executes_ht_sine_correctly()
    {
        $this->assertEquals(
            trader_ht_sine(static::$close),
            static::$trader->ht_sine(static::$close)
        );
    }

    /** @test */
    public function it_executes_ht_trendline_correctly()
    {
        $this->assertEquals(
            trader_ht_trendline(static::$close),
            static::$trader->ht_trendline(static::$close)
        );
    }

    /** @test */
    public function it_executes_ht_trendmode_correctly()
    {
        $this->assertEquals(
            trader_ht_trendmode(static::$close),
            static::$trader->ht_trendmode(static::$close)
        );
    }

    /** @test */
    public function it_executes_kama_correctly()
    {
        $this->assertEquals(
            trader_kama(static::$close, 30),
            static::$trader->kama(static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_linearreg_angle_correctly()
    {
        $this->assertEquals(
            trader_linearreg_angle(static::$close, 14),
            static::$trader->linearreg_angle(static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_linearreg_intercept_correctly()
    {
        $this->assertEquals(
            trader_linearreg_intercept(static::$close, 14),
            static::$trader->linearreg_intercept(static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_linearreg_slope_correctly()
    {
        $this->assertEquals(
            trader_linearreg_slope(static::$close, 14),
            static::$trader->linearreg_slope(static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_linearreg_correctly()
    {
        $this->assertEquals(
            trader_linearreg(static::$close, 14),
            static::$trader->linearreg(static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_ln_correctly()
    {
        $this->assertEquals(
            trader_ln(static::$close),
            static::$trader->ln(static::$close)
        );
    }

    /** @test */
    public function it_executes_log10_correctly()
    {
        $this->assertEquals(
            trader_log10(static::$close),
            static::$trader->log10(static::$close)
        );
    }

    /** @test */
    public function it_executes_ma_correctly()
    {
        $this->assertEquals(
            trader_ma(static::$close, 30, TRADER_MA_TYPE_SMA),
            static::$trader->ma(static::$close, 30, TRADER_MA_TYPE_SMA)
        );
    }

    /** @test */
    public function it_executes_macd_correctly()
    {
        $this->assertEquals(
            trader_macd(static::$close, 12, 26, 9),
            static::$trader->macd(static::$close, 12, 26, 9)
        );
    }

    /** @test */
    public function it_executes_macdext_correctly()
    {
        $this->assertEquals(
            trader_macdext(static::$close, 12, TRADER_MA_TYPE_SMA, 26, TRADER_MA_TYPE_SMA, 9),
            static::$trader->macdext(static::$close, 12, TRADER_MA_TYPE_SMA, 26, TRADER_MA_TYPE_SMA, 9)
        );
    }

    /** @test */
    public function it_executes_macdfix_correctly()
    {
        $this->assertEquals(
            trader_macdfix(static::$close, 9),
            static::$trader->macdfix(static::$close, 9)
        );
    }

    /** @test */
    public function it_executes_mama_correctly()
    {
        $this->assertEquals(
            trader_mama(static::$close, 0.5, 0.05),
            static::$trader->mama(static::$close, 0.5, 0.05)
        );
    }

    /** @test */
    public function it_executes_mavp_correctly()
    {
        $this->assertEquals(
            trader_mavp(static::$close, static::$open, 2, 30, TRADER_MA_TYPE_SMA),
            static::$trader->mavp(static::$close, static::$open, 2, 30, TRADER_MA_TYPE_SMA)
        );
    }

    /** @test */
    public function it_executes_max_correctly()
    {
        $this->assertEquals(
            trader_max(static::$close, 30),
            static::$trader->max(static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_maxindex_correctly()
    {
        $this->assertEquals(
            trader_maxindex(static::$close, 30),
            static::$trader->maxindex(static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_medprice_correctly()
    {
        $this->assertEquals(
            trader_medprice(static::$high, static::$low),
            static::$trader->medprice(static::$high, static::$low)
        );
    }

    /** @test */
    public function it_executes_mfi_correctly()
    {
        $this->assertEquals(
            trader_mfi(static::$high, static::$low, static::$close, static::$volume, 14),
            static::$trader->mfi(static::$high, static::$low, static::$close, static::$volume, 14)
        );
    }

    /** @test */
    public function it_executes_midpoint_correctly()
    {
        $this->assertEquals(
            trader_midpoint(static::$close, 14),
            static::$trader->midpoint(static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_midprice_correctly()
    {
        $this->assertEquals(
            trader_midprice(static::$high, static::$low, 14),
            static::$trader->midprice(static::$high, static::$low, 14)
        );
    }

    /** @test */
    public function it_executes_min_correctly()
    {
        $this->assertEquals(
            trader_min(static::$high, 30),
            static::$trader->min(static::$high, 30)
        );
    }

    /** @test */
    public function it_executes_minindex_correctly()
    {
        $this->assertEquals(
            trader_minindex(static::$high, 30),
            static::$trader->minindex(static::$high, 30)
        );
    }

    /** @test */
    public function it_executes_minmax_correctly()
    {
        $this->assertEquals(
            trader_minmax(static::$high, 30),
            static::$trader->minmax(static::$high, 30)
        );
    }

    /** @test */
    public function it_executes_minmaxindex_correctly()
    {
        $this->assertEquals(
            trader_minmaxindex(static::$high, 30),
            static::$trader->minmaxindex(static::$high, 30)
        );
    }

    /** @test */
    public function it_executes_minus_di_correctly()
    {
        $this->assertEquals(
            trader_minus_di(static::$high, static::$low, static::$close, 14),
            static::$trader->minus_di(static::$high, static::$low, static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_minus_dmi_correctly()
    {
        $this->assertEquals(
            trader_minus_dm(static::$high, static::$low, 14),
            static::$trader->minus_dm(static::$high, static::$low, 14)
        );
    }

    /** @test */
    public function it_executes_mom_correctly()
    {
        $this->assertEquals(
            trader_mom(static::$high, 10),
            static::$trader->mom(static::$high, 10)
        );
    }

    /** @test */
    public function it_executes_mult_correctly()
    {
        $this->assertEquals(
            trader_mult(static::$open, static::$close),
            static::$trader->mult(static::$open, static::$close)
        );
    }

    /** @test */
    public function it_executes_natr_correctly()
    {
        $this->assertEquals(
            trader_natr(static::$high, static::$low, static::$close, 14),
            static::$trader->natr(static::$high, static::$low, static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_obv_correctly()
    {
        $this->assertEquals(
            trader_obv(static::$close, static::$volume),
            static::$trader->obv(static::$close, static::$volume)
        );
    }

    /** @test */
    public function it_executes_plus_di_correctly()
    {
        $this->assertEquals(
            trader_plus_di(static::$high, static::$low, static::$close, 14),
            static::$trader->plus_di(static::$high, static::$low, static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_plus_dm_correctly()
    {
        $this->assertEquals(
            trader_plus_dm(static::$high, static::$low, 14),
            static::$trader->plus_dm(static::$high, static::$low, 14)
        );
    }

    /** @test */
    public function it_executes_ppo_correctly()
    {
        $this->assertEquals(
            trader_ppo(static::$close, 12, 26, TRADER_MA_TYPE_SMA),
            static::$trader->ppo(static::$close, 12, 26, TRADER_MA_TYPE_SMA)
        );
    }

    /** @test */
    public function it_executes_roc_correctly()
    {
        $this->assertEquals(
            trader_roc(static::$close, 10),
            static::$trader->roc(static::$close, 10)
        );
    }

    /** @test */
    public function it_executes_rocp_correctly()
    {
        $this->assertEquals(
            trader_rocp(static::$close, 10),
            static::$trader->rocp(static::$close, 10)
        );
    }

    /** @test */
    public function it_executes_rocr100_correctly()
    {
        $this->assertEquals(
            trader_rocr100(static::$close, 10),
            static::$trader->rocr100(static::$close, 10)
        );
    }

    /** @test */
    public function it_executes_rocr_correctly()
    {
        $this->assertEquals(
            trader_rocr(static::$close, 10),
            static::$trader->rocr(static::$close, 10)
        );
    }

    /** @test */
    public function it_executes_rsi_correctly()
    {
        $this->assertEquals(
            trader_rsi(static::$close, 14),
            static::$trader->rsi(static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_sar_correctly()
    {
        $this->assertEquals(
            trader_sar(static::$close, static::$low, 0.02, 0.2),
            static::$trader->sar(static::$close, static::$low, 0.02, 0.2)
        );
    }

    /** @test */
    public function it_executes_sarext_correctly()
    {
        $this->assertEquals(
            trader_sarext(static::$close, static::$low, 0.0, 0.0, 0.02, 0.02, 0.2, 0.02, 0.02, 0.2),
            static::$trader->sarext(static::$close, static::$low, 0.0, 0.0, 0.02, 0.02, 0.2, 0.02, 0.02, 0.2)
        );
    }

    /** @test */
    public function it_executes_set_compat_correctly()
    {
        static::$trader->set_compat(TRADER_COMPATIBILITY_DEFAULT);

        $this->assertEquals(
            TRADER_COMPATIBILITY_DEFAULT,
            trader_get_compat()
        );
    }

    /** @test */
    public function it_executes_set_unstable_period_correctly()
    {
        static::$trader->set_unstable_period(TRADER_FUNC_UNST_ADX, 14);

        $this->assertEquals(
            14,
            trader_get_unstable_period(TRADER_FUNC_UNST_ADX)
        );
    }

    /** @test */
    public function it_executes_sin_correctly()
    {
        $this->assertEquals(
            trader_sin(static::$close),
            static::$trader->sin(static::$close)
        );
    }

    /** @test */
    public function it_executes_sinh_correctly()
    {
        $this->assertEquals(
            trader_sinh(static::$close),
            static::$trader->sinh(static::$close)
        );
    }

    /** @test */
    public function it_executes_sma_correctly()
    {
        $this->assertEquals(
            trader_sma(static::$close, 30),
            static::$trader->sma(static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_sqrt_correctly()
    {
        $this->assertEquals(
            trader_sqrt(static::$close),
            static::$trader->sqrt(static::$close)
        );
    }

    /** @test */
    public function it_executes_stddev_correctly()
    {
        $this->assertEquals(
            trader_stddev(static::$close, 5, 1.0),
            static::$trader->stddev(static::$close, 5, 1.0)
        );
    }

    /** @test */
    public function it_executes_stoch_correctly()
    {
        $this->assertEquals(
            trader_stoch(static::$high, static::$low, static::$close, 5, 3, TRADER_MA_TYPE_SMA, 3,
                TRADER_MA_TYPE_SMA),
            static::$trader->stoch(static::$high, static::$low, static::$close, 5, 3, TRADER_MA_TYPE_SMA, 3,
                TRADER_MA_TYPE_SMA)
        );
    }

    /** @test */
    public function it_executes_stochf_correctly()
    {
        $this->assertEquals(
            trader_stochf(static::$high, static::$low, static::$close, 5, 3, TRADER_MA_TYPE_SMA),
            static::$trader->stochf(static::$high, static::$low, static::$close, 5, 3, TRADER_MA_TYPE_SMA)
        );
    }

    /** @test */
    public function it_executes_stochrsi_correctly()
    {
        $this->assertEquals(
            trader_stochrsi(static::$close, 14, 5, 3, TRADER_MA_TYPE_SMA),
            static::$trader->stochrsi(static::$close, 14, 5, 3, TRADER_MA_TYPE_SMA)
        );
    }

    /** @test */
    public function it_executes_sub_correctly()
    {
        $this->assertEquals(
            trader_sub(static::$high, static::$low),
            static::$trader->sub(static::$high, static::$low)
        );
    }

    /** @test */
    public function it_executes_sum_correctly()
    {
        $this->assertEquals(
            trader_sum(static::$high, 30),
            static::$trader->sum(static::$high, 30)
        );
    }

    /** @test */
    public function it_executes_t3_correctly()
    {
        $this->assertEquals(
            trader_t3(static::$high, 5, 0.7),
            static::$trader->t3(static::$high, 5, 0.7)
        );
    }

    /** @test */
    public function it_executes_tan_correctly()
    {
        $this->assertEquals(
            trader_tan(static::$close),
            static::$trader->tan(static::$close)
        );
    }

    /** @test */
    public function it_executes_tanh_correctly()
    {
        $this->assertEquals(
            trader_tanh(static::$close),
            static::$trader->tanh(static::$close)
        );
    }

    /** @test */
    public function it_executes_tema_correctly()
    {
        $this->assertEquals(
            trader_tema(static::$close, 30),
            static::$trader->tema(static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_trange_correctly()
    {
        $this->assertEquals(
            trader_trange(static::$high, static::$low, static::$close),
            static::$trader->trange(static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_trima_correctly()
    {
        $this->assertEquals(
            trader_trima(static::$close, 30),
            static::$trader->trima(static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_trix_correctly()
    {
        $this->assertEquals(
            trader_trix(static::$close, 30),
            static::$trader->trix(static::$close, 30)
        );
    }

    /** @test */
    public function it_executes_tsf_correctly()
    {
        $this->assertEquals(
            trader_tsf(static::$close, 14),
            static::$trader->tsf(static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_typprice_correctly()
    {
        $this->assertEquals(
            trader_typprice(static::$high, static::$low, static::$close),
            static::$trader->typprice(static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_ultosc_correctly()
    {
        $this->assertEquals(
            trader_ultosc(static::$high, static::$low, static::$close, 7, 14, 28),
            static::$trader->ultosc(static::$high, static::$low, static::$close, 7, 14, 28)
        );
    }

    /** @test */
    public function it_executes_var_correctly()
    {
        $this->assertEquals(
            trader_var(static::$close, 5, 1.0),
            static::$trader->var(static::$close, 5, 1.0)
        );
    }

    /** @test */
    public function it_executes_wclprice_correctly()
    {
        $this->assertEquals(
            trader_wclprice(static::$high, static::$low, static::$close),
            static::$trader->wclprice(static::$high, static::$low, static::$close)
        );
    }

    /** @test */
    public function it_executes_willr_correctly()
    {
        $this->assertEquals(
            trader_willr(static::$high, static::$low, static::$close, 14),
            static::$trader->willr(static::$high, static::$low, static::$close, 14)
        );
    }

    /** @test */
    public function it_executes_wma_correctly()
    {
        $this->assertEquals(
            trader_wma(static::$close, 30),
            static::$trader->wma(static::$close, 30)
        );
    }

    /** @test */
    public function it_handles_errors_by_throwing_exception()
    {
        $this->expectException(BadFunctionCallException::class);
        $this->expectExceptionCode(static::$trader::ERR_BAD_PARAM);
        $this->expectExceptionMessage('Bad parameter');

        static::$trader->wma([]);
    }
}
