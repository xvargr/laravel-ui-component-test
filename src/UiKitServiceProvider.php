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
            __DIR__ . '/../dist' => public_path('vendor/cxs-ui-kit'),
        ], 'uikit-assets');

        $this->publishes([
            __DIR__ . '/../resources/views/components' => resource_path('views/components/cxs-ui-kit'),
        ], 'uikit-components');

        $this->publishes([
            __DIR__ . '/../resources/views/stories' => resource_path('views/stories/cxs-ui-kit'),
        ], 'uikit-stories');

        Blade::directive('CxsUiKitStyles', function () {
            return '<link rel="stylesheet" href="' . asset('vendor/cxs-ui-kit/css/uikit.css') . '">';
        });
    }

    public function register()
    {
        //
    }
}
