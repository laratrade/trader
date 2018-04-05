<?php

namespace Nasyrov\Laravel\Trader;

use Illuminate\Support\ServiceProvider;
use Nasyrov\Laravel\Trader\Contracts\Trader as TraderContract;

class TraderServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->singleton(TraderContract::class, function () {
            return new Trader;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            TraderContract::class,
        ];
    }
}
