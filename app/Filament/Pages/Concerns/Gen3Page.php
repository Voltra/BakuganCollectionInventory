<?php

namespace App\Filament\Pages\Concerns;

use App\Enums\AdminGroup;

trait Gen3Page {
    public static function getNavigationGroup(): ?string
    {
        return AdminGroup::GEN3->getLabel();
    }
}
