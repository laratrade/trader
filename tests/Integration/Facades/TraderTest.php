<?php

namespace Nasyrov\Laravel\Trader\Tests\Integration\Facades;

use Nasyrov\Laravel\Trader\Facades\Trader as TraderFacade;
use Nasyrov\Laravel\Trader\Tests\Integration\TestCase;
use Nasyrov\Laravel\Trader\Trader;

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
