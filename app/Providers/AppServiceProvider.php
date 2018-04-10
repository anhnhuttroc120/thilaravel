<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @redturn void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        $test=['default'=>'CHỌN','nam','nho'];
        view()->share('test',$test);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
