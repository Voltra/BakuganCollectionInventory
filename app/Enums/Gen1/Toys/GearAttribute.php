<?php

namespace App\Enums\Gen1\Toys;

use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum GearAttribute: string implements HasLabel, HasIcon
{
    case GOLD = "gen1_gold";
    case SILVER = "gen1_silver";
    case COPPER = "gen1_copper";

    public function getLabel(): ?string
    {
        return match($this) {
            self::GOLD => "Gold",
            self::SILVER => "Silver",
            self::COPPER => "Copper",
        };
    }

    public function getIcon(): ?string
    {
        return match($this) {
            self::GOLD => "gen1-gold",
            self::SILVER => "gen1-silver",
            self::COPPER => "gen1-copper",
        };
    }
}
