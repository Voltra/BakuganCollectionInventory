<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Cards;

use App\Enums\Concerns\BackedEnum;
use Filament\Support\Contracts\HasLabel;

enum CardLanguageType: string implements HasLabel
{
    use BackedEnum;

    case EN_ONLY = 'en_only';
    case EN_FR = 'en_fr';
    case FULL_ART = 'fullart';
    case INTERNATIONAL_EN = 'international_en';
    case INTERNATIONAL_EN_FR = 'international_en_fr';
    case INTERNATIONAL_NO_EN_NO_FR = 'international_no_en_no_fr';
    case JAP_EN = 'jap_en';
    case JAP = 'jap';

    public function getLabel(): ?string
    {
        return __("gen1/cardLanguageTypes.{$this->value}");
    }

    public function hasEnglishText(): bool
    {
        return in_array($this, [
            self::EN_ONLY,
            self::EN_FR,
            self::INTERNATIONAL_EN,
            self::INTERNATIONAL_EN_FR,
            self::JAP_EN,
        ]);
    }

    public function hasFrenchText(): bool
    {
        return in_array($this, [
            self::EN_FR,
            self::INTERNATIONAL_EN_FR,
        ]);
    }

    public function isTCG(): bool
    {
        return ! $this->isOCG();
    }

    public function isOCG(): bool
    {
        return in_array($this, [
            self::JAP_EN,
            self::JAP,
        ]);
    }
}
