<?php

declare(strict_types=1);

namespace App\Filament\Resources;

use App\Enums\AdminGroup;

abstract class Resource extends \Filament\Resources\Resource
{
    abstract public static function getTranslationKey(): string;

    abstract public static function getAdminGroup(): AdminGroup;

    #[\Override]
    public static function getModelLabel(): string
    {
        $key = static::getTranslationKey();

        return __("gen1/{$key}.titles.singular");
    }

    #[\Override]
    public static function getPluralModelLabel(): string
    {
        $key = static::getTranslationKey();

        return __("gen1/{$key}.titles.plural");
    }

    #[\Override]
    public static function getNavigationLabel(): string
    {
        return static::getPluralModelLabel();
    }

    #[\Override]
    public static function getTitleCaseModelLabel(): string
    {
        return static::getModelLabel();
    }

    #[\Override]
    public static function getTitleCasePluralModelLabel(): string
    {
        return static::getPluralModelLabel();
    }
}
