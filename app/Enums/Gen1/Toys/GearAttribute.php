<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Toys;

use App\Enums\Concerns\BackedEnum;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum GearAttribute: string implements HasIcon, HasLabel
{
    use BackedEnum;

    case GOLD = 'gen1_gold';
    case SILVER = 'gen1_silver';
    case COPPER = 'gen1_copper';

    public function getLabel(): ?string
    {
        return __("gen1/gearAttributes.{$this->value}");
    }

    public function getIcon(): ?string
    {
        return str_replace('_', '-', $this->value);
    }
}
