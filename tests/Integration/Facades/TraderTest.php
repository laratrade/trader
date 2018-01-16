<?php

namespace Laratrade\Trader\Tests\Integration\Facades;

use Laratrade\Trader\Facades\Trader as TraderFacade;
use Laratrade\Trader\Tests\Integration\TestCase;
use Laratrade\Trader\Trader;

class TraderTest extends TestCase
{
    /** @test */
    public function it_provides_service_facade()
    {
        $this->assertInstanceOf(
            Trader::class,
            TraderFacade::getFacadeRoot()
        );
    }
}
