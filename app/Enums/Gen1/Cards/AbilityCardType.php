<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Cards;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum AbilityCardType: string implements HasColor, HasLabel
{
    case RED = 'red';
    case GREEN = 'green';
    case BLUE = 'blue';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::RED => 'Red',
            self::GREEN => 'Green',
            self::BLUE => 'Blue',
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::RED => Color::Red,
            self::GREEN => Color::Green,
            self::BLUE => Color::Blue,
        };
    }
}
