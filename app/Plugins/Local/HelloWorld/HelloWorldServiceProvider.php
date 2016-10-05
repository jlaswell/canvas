<?php

namespace App\Providers\Local\HelloWorld;

use Route;
use App\Plugins\ServiceProvider as CanvasServiceProvider;

class HelloWorldServiceProvider extends CanvasServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Route::group([
            'middleware' => 'auth',
        ], function () {
            // Home Page
            Route::get('example', function () {
                return response('Welcome to an example plugin');
            });
        });
        app('view')->addNamespace('helloworld', '/Users/jlaswell/git/austintoddj/canvas/app/Plugins/Local/HelloWorld/resources/views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    public function name()
    {
        return 'Hello World';
    }

    public function render()
    {
        return view('helloworld::partials.welcome');
    }
}
