<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Toys;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum SupportAttribute: string implements HasIcon, HasLabel
{
    case AQUOS = 'gen1_aquos';
    case DARKUS = 'gen1_darkus';
    case HAOS = 'gen1_haos';
    case PYRUS = 'gen1_pyrus';
    case SUBTERRA = 'gen1_subterra';
    case VENTUS = 'gen1_ventus';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::AQUOS => 'Aquos',
            self::DARKUS => 'Darkus',
            self::HAOS => 'Haos',
            self::PYRUS => 'Pyrus',
            self::SUBTERRA => 'Subterra',
            self::VENTUS => 'Ventus',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::AQUOS => 'gen1-aquos',
            self::DARKUS => 'gen1-darkus',
            self::HAOS => 'gen1-haos',
            self::PYRUS => 'gen1-pyrus',
            self::SUBTERRA => 'gen1-subterra',
            self::VENTUS => 'gen1-ventus',
        };
    }
}
