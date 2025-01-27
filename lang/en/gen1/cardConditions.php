<?php

use App\Enums\Gen1\Cards\CardCondition;

return [
    CardCondition::MINT->value => 'Mint',
    CardCondition::NEAR_MINT->value => 'Near mint',
    CardCondition::EXCELLENT->value => 'Excellent',
    CardCondition::LIGHTLY_PLAYED->value => 'Lightly played',
    CardCondition::DAMAGED_CORNER->value => 'Damaged corner',
    CardCondition::DAMAGED_CORNERS->value => 'Damaged corners',
    CardCondition::ROUGH->value => 'Rough',
    CardCondition::POOR->value => 'Poor',
];

