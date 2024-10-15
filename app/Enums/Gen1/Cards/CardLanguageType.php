<?php

declare(strict_types=1);

namespace App\Enums\Gen1\Cards;

use Filament\Support\Contracts\HasLabel;

enum CardLanguageType: string implements HasLabel
{
    case EN_FR = 'en_fr';
    case FULL_ART = 'fullart';
    case INTERNATIONAL_EN = 'international_en';
    case INTERNATIONAL_EN_FR = 'international_en_fr';
    case INTERNATIONAL_NO_EN_NO_FR = 'international_no_en_no_fr';
    case JAP_EN = 'jap_en';
    case JAP = 'jap';

    public function getLabel(): ?string
    {
        return match($this) {
            self::EN_FR => 'EN/FR',
            self::FULL_ART => 'Fullart',
            self::INTERNATIONAL_EN => 'International (EN, etc.)',
            self::INTERNATIONAL_EN_FR => 'Internation (EN, FR, etc.)',
            self::INTERNATIONAL_NO_EN_NO_FR => 'International (no EN, no FR)',
            self::JAP_EN => 'Jap (+ trad EN)',
            self::JAP => 'Jap',
        };
    }

    public function hasEnglishText(): bool
    {
        return in_array($this, [
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

    public function isOCG(): bool
    {
        return in_array($this, [
            self::JAP_EN,
            self::JAP,
        ]);
    }

    public function isTCG(): bool
    {
        return ! $this->isOCG();
    }
}
