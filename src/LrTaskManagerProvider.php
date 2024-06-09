<?php
namespace Zems\LrTaskManager;

use Illuminate\Support\ServiceProvider;

class LrTaskManagerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // $this->LoadViewsFrom(__DIR__.'/views', 'crudapi');
        $this->app->singleton(LrTaskManagerController::class, function(){
            return new LrTaskManagerController();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Route.php');
    }
}
