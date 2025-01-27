<?php

declare(strict_types=1);

namespace App\Providers;

use Barryvdh\Debugbar\ServiceProvider as DebugerBarServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\ServiceProvider;

class DebugServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        if ($this->app->isLocal() && $this->app->hasDebugModeEnabled()) {
            $this->app->register(IdeHelperServiceProvider::class);
            $this->app->register(DebugerBarServiceProvider::class);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
