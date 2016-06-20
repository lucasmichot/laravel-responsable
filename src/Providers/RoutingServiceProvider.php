<?php

namespace Lucasmichot\LaravelResponsable\Providers;

use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\Contracts\Routing\ResponseFactory as ResponseFactoryContract;
use Illuminate\Routing\RoutingServiceProvider as BaseRoutingServiceProvider;
use Lucasmichot\LaravelResponsable\Factories\ResponseFactory as ResponsableResponseFactory;

class RoutingServiceProvider extends BaseRoutingServiceProvider
{
    /**
     * {@inheritdoc}
     */
    protected function registerResponseFactory()
    {
        $this->app->singleton(ResponseFactoryContract::class, function ($app) {
            return new ResponsableResponseFactory($app[ViewFactory::class], $app['redirect']);
        });
    }
}
