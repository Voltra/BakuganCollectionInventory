<?php

namespace App\Filament\Pages\Concerns;

use App\Enums\AdminGroup;

trait Gen2Page {
    public static function getNavigationGroup(): ?string
    {
        return AdminGroup::GEN2->getLabel();
    }
}
