<?php

namespace Nasyrov\Laravel\Trader\Tests\Integration;

use Nasyrov\Laravel\Trader\TraderServiceProvider;
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
