<?php

namespace Laratrade\Trader\Tests\Integration;

use Laratrade\Trader\TraderServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    /**
     * @inheritdoc
     */
    protected function getPackageProviders($app)
    {
        return [
            TraderServiceProvider::class,
        ];
    }
}
