<?php

namespace ZeusVision\Modules;

use Illuminate\Support\ServiceProvider;
use ZeusVision\Modules\Console\CreateModule;

class ZeusModulesServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateModule::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../config/zeus.php' => config_path('zeus.php'),
        ], ['config', 'zeus']);
    }

    public function register()
    {
        $this->app->bind('create-module', function () {
            return new CreateModule();
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/zeus.php', 'zeus');
    }
}
