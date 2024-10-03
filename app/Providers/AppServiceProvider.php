<?php

namespace App\Providers;

use Illuminate\Foundation\Vite;
use Illuminate\Support\ServiceProvider;
use Z3d0X\FilamentFabricator\Facades\FilamentFabricator;
use Z3d0X\FilamentFabricator\Forms\Components\PageBuilder;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Register scripts
        FilamentFabricator::registerScripts([
            app(Vite::class)('resources/js/app.js'), //vite
        ]);

        //Register styles
        FilamentFabricator::registerStyles([
            app(Vite::class)('resources/css/app.css'), //vite
        ]);

        PageBuilder::configureUsing(function (PageBuilder $builder) {
            $builder->collapsible();
            $builder->cloneable(); //You can use any method supported by the Builder field
            //You can use any method supported by the Builder field
        });
    }
}
