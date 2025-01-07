<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Toys;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum BakuganAttribute: string implements HasIcon, HasLabel
{
    case ATTRIBUTELESS = 'gen1_attributeless';
    case AQUOS = 'gen1_aquos';
    case DARKUS = 'gen1_darkus';
    case HAOS = 'gen1_haos';
    case PYRUS = 'gen1_pyrus';
    case SUBTERRA = 'gen1_subterra';
    case VENTUS = 'gen1_ventus';

    public function getLabel(): ?string
    {
        return str($this->value)
            ->after('_')
            ->ucfirst()
            ->toString();
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::ATTRIBUTELESS => 'tabler-circle-dotted',
            default => str_replace('_', '-', $this->value),
        };
    }
}
