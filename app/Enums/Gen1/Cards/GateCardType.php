<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Cards;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum GateCardType: string implements HasIcon, HasLabel
{
    case GOLD = 'gen1_gold';
    case SILVER = 'gen1_silver';
    case COPPER = 'gen1_copper';

    public function getLabel(): ?string
    {
        return __("gen1/gateCardTypes.{$this->value}");
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            GateCardType::GOLD => 'gen1-gold',
            GateCardType::SILVER => 'gen1-silver',
            GateCardType::COPPER => 'gen1-copper',
        };
    }
}
