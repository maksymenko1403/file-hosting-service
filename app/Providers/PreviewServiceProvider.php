<?php

namespace App\Providers;

use App\Service\PreviewService;
use App\Service\FileService;
use Illuminate\Support\ServiceProvider;

class PreviewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('preview',function (){
            return new PreviewService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
