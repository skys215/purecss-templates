<?php

namespace InfyOm\PureCSSTemplates;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class PureCSSTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'purecss-templates');
        $this->publishes([
            __DIR__.'/../views/common' => resource_path('views/vendor/purecss-templates/common'),
        ], 'purecss-views');

        $this->publishes([
            __DIR__.'/../views/templates' => resource_path('views/vendor/purecss-templates/templates'),
        ], 'purecss-templates');

        Paginator::defaultView('purecss-templates::common.paginator');
        Paginator::defaultSimpleView('purecss-templates::common.simple_paginator');

        Blade::directive('ocb', function () {
            return '<?php echo "{{ " ?>';
        });

        Blade::directive('ccb', function () {
            return '<?php echo " }}" ?>';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
