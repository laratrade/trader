<?php

namespace Laratrade\Trader\Tests\Unit;

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
    public static function setUpBeforeClass()
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
        $constants = (new ReflectionClass(Trader::class))->getConstants();

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
}
