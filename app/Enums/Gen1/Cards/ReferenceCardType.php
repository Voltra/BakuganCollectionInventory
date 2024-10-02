<?php

namespace App\Enums\Gen1\Cards;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum ReferenceCardType: string implements HasLabel, HasColor
{
    case BATTLE_GEAR = "battle_gear";
    case EVO = "baku_evo";
    case MOBILE_ASSAULT = "mobile_assault";
    case BATTLE_SUIT = "battle_suit";
    case SKY_RAIDER = "sky_raider";

	public function getLabel(): ?string
	{
		return match($this) {
            self::BATTLE_GEAR => "Battle Gear",
            self::EVO => "Bakugan Evolution",
            self::MOBILE_ASSAULT => "Mobile Assault Vehicule",
            self::BATTLE_SUIT => "Battle Suit",
            self::SKY_RAIDER => "Sky Raider",
        };
	}

    public function getColor(): string|array|null
    {
        return match($this) {
            self::EVO => Color::Purple,
            default => Color::Blue,
        };
    }
}
