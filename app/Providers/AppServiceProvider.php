<?php

declare(strict_types=1);

namespace App\Providers;

use Doctrine\DBAL\Types\StringType;
use Doctrine\DBAL\Types\Type;
use Illuminate\Database\Eloquent\Model;
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

        if (! Type::hasType('enum')) {
            Type::addType('enum', StringType::class);
        }

        // This is used because the tables have wayyy too many columns, and
        // I'm lazy and for once follow the recommendation of Filament
        // over the Laravel one.
        // In the future this should be removed and $fillable
        // should be added to every model with the
        // appropriate database columns.
        Model::unguard();
    }
}
