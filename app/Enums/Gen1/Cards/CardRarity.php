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
        return __("gen1/cardRarities.labels.{$this->value}");
    }

    public function getDescription(): ?string
    {
        return __("gen1/cardRarities.descriptions.{$this->value}");
    }
}
