<?php

namespace Hublinkaz\MarkUpTemplates;

use Illuminate\Support\ServiceProvider;

class MarkUpTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'markup-templates');
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
