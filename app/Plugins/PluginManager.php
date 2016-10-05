<?php

namespace App\Plugins;

class PluginManager
{
    protected $providers;

    public function __construct($providers = [])
    {
        $this->providers = $this->loadPlugins($providers);
    }

    public function plugins()
    {
        return $this->providers;
    }

    public function loadPlugins($providers)
    {
        $collection = collect();
        foreach ($providers as $provider) {
            app()->register($provider);
            $collection->push(resolve($provider));
        }

        return $collection;
    }
}
