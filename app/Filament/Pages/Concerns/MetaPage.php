<?php

namespace App\Filament\Pages\Concerns;

use App\Enums\AdminGroup;

trait MetaPage {
    public static function getNavigationGroup(): ?string
    {
        return AdminGroup::META->getLabel();
    }
}
