<?php

namespace App\Providers;

use BladeUI\Icons\Exceptions\CannotRegisterIconSet;
use BladeUI\Icons\Factory;
use Illuminate\Support\ServiceProvider;

class BladeExtensionsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @throws CannotRegisterIconSet
     */
    public function register(): void
    {
        $this->callAfterResolving(Factory::class, function (Factory $factory) {
            $factory->add('gen1', [
                'path' => resource_path('svg/gen1'),
                'prefix' => 'gen1',
            ]);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
