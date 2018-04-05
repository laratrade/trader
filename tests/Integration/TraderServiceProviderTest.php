<?php

namespace Nasyrov\Laravel\Trader\Tests\Integration;

use Nasyrov\Laravel\Trader\Contracts\Trader as TraderContract;
use Nasyrov\Laravel\Trader\Trader;

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
