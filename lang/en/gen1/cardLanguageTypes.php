<?php

use App\Enums\Gen1\Cards\CardLanguageType;

return [
    CardLanguageType::EN_ONLY->value => 'EN',
    CardLanguageType::EN_FR->value => 'EN/FR',
    CardLanguageType::FULL_ART->value => 'Fullart',
    CardLanguageType::INTERNATIONAL_EN->value => 'International (EN, etc.)',
    CardLanguageType::INTERNATIONAL_EN_FR->value => 'Internation (EN, FR, etc.)',
    CardLanguageType::INTERNATIONAL_NO_EN_NO_FR->value => 'International (no EN, no FR)',
    CardLanguageType::JAP_EN->value => 'Jap (+ trad EN)',
    CardLanguageType::JAP->value => 'Jap',
];
