<?php

declare(strict_types=1);

namespace App\Filament\Pages\Concerns;

use App\Enums\AdminGroup;

trait Gen1Page
{
    public static function getNavigationGroup(): ?string
    {
        return AdminGroup::GEN1->getLabel();
    }

    public static function getAdminGroup(): AdminGroup
    {
        return AdminGroup::GEN1;
    }
}
