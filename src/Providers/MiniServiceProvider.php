<?php
namespace Carmi\MiniItem\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class MiniServiceProvider extends ServiceProvider
{

    public function register()
    {
        //

    }

    public function boot()
    {
        //
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'Mini'
        );
    }


    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }

    private function routeConfiguration()
    {
        return [
            'namespace' => 'Carmi\MiniItem\Http\Controllers',
            'prefix' => "mini",
            'middleware' => 'web',
        ];
    }

}