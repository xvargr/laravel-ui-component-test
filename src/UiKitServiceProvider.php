<?php

namespace Cxs\UiKit;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UiKitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'cxs-ui-kit');
        Blade::componentNamespace('Cxs\UiKit\Views\Components', 'cxs-ui-kit');
        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/components/cxs-ui-kit'), 
            __DIR__ . '/../resources/views/stories' => resource_path('views/stories/cxs-ui-kit'),
        ]);
    }

    public function register()
    {
        //
    }
}
