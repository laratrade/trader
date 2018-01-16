<?php

namespace Laratrade\Trader\Tests\Integration;

use Laratrade\Trader\Contracts\Trader as TraderContract;
use Laratrade\Trader\Trader;

class TraderServiceProviderTest extends TestCase
{
    /** @test */
    public function it_registers_service()
    {
        $this->assertTrue(
            $this->app->bound(TraderContract::class)
        );

        $this->assertInstanceOf(
            Trader::class,
            $this->app->make(TraderContract::class)
        );
    }
}
