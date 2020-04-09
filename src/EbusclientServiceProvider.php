<?php

namespace Sl\Ebusclient;

use Illuminate\Support\ServiceProvider;

class EbusclientServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
        $this->publishes([
            __DIR__.'/config/trustmerchant.php' => config_path('trustmerchant.php'), // 发布配置文件到 laravel 的config 下
        ]);
    }

    public function register()
    {
        $this->app->singleton('ebusclient', function ($app) {
            return new Ebusclient($app['config']);
        });
    }
}
