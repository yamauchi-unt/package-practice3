<?php

namespace YamauchiUnt\PackagePractice3;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRoutes();
        $this->configureViews();
    }

    private function configureRoutes()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/routes.php');
    }

    private function configureViews()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'nasteng');
    }
}
