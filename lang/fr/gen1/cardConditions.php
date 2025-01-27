<?php

use App\Enums\Gen1\Cards\CardCondition;

return [
    CardCondition::MINT->value => 'Neuve (scellée, en boîte)',
    CardCondition::NEAR_MINT->value => 'Comme neuve',
    CardCondition::EXCELLENT->value => 'Excellent',
    CardCondition::LIGHTLY_PLAYED->value => 'Légèrement usée',
    CardCondition::DAMAGED_CORNER->value => 'Coin abimé',
    CardCondition::DAMAGED_CORNERS->value => 'Coins abimés',
    CardCondition::ROUGH->value => 'Mauvais',
    CardCondition::POOR->value => 'Très mauvais',
];

