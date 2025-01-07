<?php

namespace App\Enums;

use Filament\Support\Contracts\HasLabel;

enum AdminGroup: string implements HasLabel {
    case GEN1 = 'gen1';
    case GEN2 = 'gen2';
    case GEN3 = 'gen3';
    case META = 'meta';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::GEN1 => 'Gen 1',
            self::GEN2 => 'Gen 2',
            self::GEN3 => 'Gen 3',
            self::META => 'Meta',
        };
    }
}
