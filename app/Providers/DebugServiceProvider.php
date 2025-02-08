<?php

declare(strict_types=1);

namespace App\Providers;

use App\Support\Composer;
use Barryvdh\Debugbar\ServiceProvider as DebugerBarServiceProvider;
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Console\Command;
use Illuminate\Console\Events\CommandFinished;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;

class DebugServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        if (! $this->isEnabled()) {
            return;
        }

        $this->app->register(IdeHelperServiceProvider::class);
        $this->app->register(DebugerBarServiceProvider::class);
    }

    public function isEnabled(): bool
    {
        return $this->app->isLocal() && $this->app->hasDebugModeEnabled();
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (! $this->isEnabled()) {
            return;
        }

        Event::listen(function (CommandFinished $finished) {
            if ($finished->exitCode === Command::SUCCESS && in_array($finished->command, [
                'migrate',
                'migrate:fresh',
                'migrate:refresh',
                'migrate:rollback',
            ])) {
                $composer = resolve(Composer::class);

                $composer->command('app:meta')
                    ->run(function ($type, $buffer) use ($finished) {
                        $finished->output?->write($buffer);
                    });
            }
        });
    }
}
