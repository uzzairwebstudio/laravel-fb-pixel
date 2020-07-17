<?php

namespace UzzairWebStudio\FBPixel;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Blade;

use UzzairWebStudio\FBPixel\View\Components\FBPixelComponent;

class FBPixelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias(FBPixel::class, 'uws-fb-pixel');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade component alias
        Blade::component('uws-fb-pixel', FBPixelComponent::class);
        // view file
        $this->publishes([
            __DIR__ . '/views' => resource_path('/views/vendor')
        ], 'uws-fb-pixel-views');
        // View Component file
        $this->publishes([
            __DIR__ . '/View' => app_path('/View')
        ], 'uws-fb-pixel-app');

    }
}
