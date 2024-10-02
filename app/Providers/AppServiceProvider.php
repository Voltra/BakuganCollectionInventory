<?php

declare(strict_types=1);

namespace App\Providers;

use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\Type;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (App::isProduction()) {
            // In production, we want to make sure that all traffic
            // is using HTTPS and also that it only comes from our
            // own URL only (in addition to the TrustHosts middleware)
            URL::forceScheme('https');
            URL::forceRootUrl(env('APP_URL'));
        }

        if (!Type::hasType('enum')) {
            Type::addType('enum', StringType::class);
        }
    }
}
