<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Cards;

use App\Enums\Concerns\BackedEnum;
use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasLabel;

enum CardCondition: string implements HasColor, HasLabel
{
    use BackedEnum;

    case MINT = 'mint';
    case NEAR_MINT = 'near_mint';
    case EXCELLENT = 'excellent';
    case LIGHTLY_PLAYED = 'lightly_played';
    case DAMAGED_CORNER = 'damaged_corner';
    case DAMAGED_CORNERS = 'damaged_corners';
    case ROUGH = 'rough';
    case POOR = 'poor';

    public function getLabel(): ?string
    {
        return str($this->value)
            ->replace('_', ' ')
            ->ucfirst()
            ->toString();
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::MINT => Color::hex('#00dc00'),
            self::NEAR_MINT => Color::hex('#00d500'),
            self::EXCELLENT => Color::hex('#78cb00'),
            self::LIGHTLY_PLAYED => Color::hex('#a4c208'),
            self::DAMAGED_CORNER => Color::hex('#cdb613'),
            self::DAMAGED_CORNERS => Color::hex('#ff9921'),
            self::ROUGH => Color::hex('#ff6d2c'),
            self::POOR => Color::hex('#ff0038'),
        };
    }
}
