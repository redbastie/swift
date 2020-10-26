<?php

namespace Redbastie\Swift\Providers;

use Illuminate\Support\ServiceProvider;
use Redbastie\Swift\Commands\InstallSwiftCommand;
use Redbastie\Swift\Commands\MakeCrudCommand;
use Redbastie\Swift\Commands\MakeCrudTraitCommand;
use Redbastie\Swift\Commands\MakePageCommand;
use Redbastie\Swift\Commands\MakeSwiftCommand;
use Redbastie\Swift\Commands\MakeSwiftModelCommand;
use Redbastie\Swift\Commands\MigrateAutoCommand;

class SwiftServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                InstallSwiftCommand::class,
                MakeCrudCommand::class,
                MakeCrudTraitCommand::class,
                MakePageCommand::class,
                MakeSwiftCommand::class,
                MakeSwiftModelCommand::class,
                MigrateAutoCommand::class,
            ]);
        }

        $this->publishes([__DIR__ . '/../../config/swift.php' => config_path('swift.php')]);

        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'swift');
        $this->publishes([__DIR__ . '/../../resources/views' => resource_path('views/vendor/swift')]);

        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'swift');
        $this->publishes([__DIR__ . '/../../resources/lang' => resource_path('lang/vendor/swift')]);

        $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/swift.php', 'swift');
    }
}
