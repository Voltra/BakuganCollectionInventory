<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Toys;

use App\Enums\Concerns\BackedEnum;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum SupportAttribute: string implements HasIcon, HasLabel
{
    use BackedEnum;

    case AQUOS = BakuganAttribute::AQUOS->value;
    case DARKUS = BakuganAttribute::DARKUS->value;
    case HAOS = BakuganAttribute::HAOS->value;
    case PYRUS = BakuganAttribute::PYRUS->value;
    case SUBTERRA = BakuganAttribute::SUBTERRA->value;
    case VENTUS = BakuganAttribute::VENTUS->value;

    public function getLabel(): ?string
    {
        return str($this->value)
            ->after('_')
            ->ucfirst()
            ->toString();
    }

    public function getIcon(): ?string
    {
        return str_replace('_', '-', $this->value);
    }
}
