<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Cards;

use App\Enums\Concerns\BackedEnum;
use Filament\Support\Contracts\HasDescription;
use Filament\Support\Contracts\HasLabel;

enum CardRarity: string implements HasDescription, HasLabel
{
    use BackedEnum;

    case COMMON = 'common';

    case FOIL = 'foil';

    case BRONZE_ATTACK = 'bronze_attack';

    case HOLO_3D = '3D_rare';

    case CONFETTI = 'confetti_rare';

    case FULL_PRISMATIC = 'prismatic_full';

    case BORDER_PRISMATIC = 'prismatic_border';

    case ART_PRISMATIC = 'prismatic_art';

    public function getLabel(): ?string
    {
        return str($this->value)
            ->replace('_', ' ')
            ->ucfirst()
            ->toString();
    }

    public function getDescription(): ?string
    {
        return match ($this) {
            self::COMMON => 'The default rarity. Nothing special about it.',
            self::FOIL => 'The title and parts of the cards are in a silver foil.',
            self::BRONZE_ATTACK => 'The rarity of cards that came in Bronze Attack packs. The character silhouette on the cards is in a gold foil.',
            self::HOLO_3D => 'Holographic 3D cards. The art appears 3D or to "move" when you move the card from left to right (and vice versa).',
            self::CONFETTI => 'The entire card is covered in red, green and blue foil spots that look like confetti',
            self::FULL_PRISMATIC => 'The entire card is covered in red, green and blue foil spots that look like tiny prisms',
            self::BORDER_PRISMATIC => 'Only the card\'s border is covered in red, green and blue foil spots that look like tiny prisms',
            self::ART_PRISMATIC => 'Only the card\'s art is covered in red, green and blue foil spots that look like tiny prisms',
        };
    }
}
