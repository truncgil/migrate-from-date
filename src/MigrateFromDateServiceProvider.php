<?php 
namespace Truncgil\MigrateFromDate;

use Illuminate\Support\ServiceProvider;

class MigrateFromDateServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register any application services.
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                \Truncgil\MigrateFromDate\Console\Commands\MigrateFromDate::class,
            ]);
        }
    }
}
