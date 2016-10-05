<?php

namespace App\Plugins;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

abstract class ServiceProvider extends IlluminateServiceProvider
{
    public function __construct(Application $app)
    {
        parent::__construct($app);
    }

    abstract public function name();
}
