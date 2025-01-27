<?php

use App\Enums\Gen1\Cards\CardRarity;

return [
    'labels' => [
        CardRarity::COMMON->value => 'Common',
        CardRarity::FOIL->value => 'Foil',
        CardRarity::BRONZE_ATTACK->value => 'Bronze attack',
        CardRarity::HOLO_3D->value => '3D rare',
        CardRarity::CONFETTI->value => 'Confetti rare',
        CardRarity::FULL_PRISMATIC->value => 'Full Prismatic',
        CardRarity::BORDER_PRISMATIC->value => 'Prismatic border',
        CardRarity::ART_PRISMATIC->value => 'Prismatic artwork',
    ],
    'descriptions' => [
        CardRarity::COMMON->value => 'The default rarity. Nothing special about it.',
        CardRarity::FOIL->value => 'The title and parts of the cards are in a silver foil.',
        CardRarity::BRONZE_ATTACK->value => 'The rarity of cards that came in Bronze Attack packs. The character silhouette on the cards is in a gold foil.',
        CardRarity::HOLO_3D->value => 'Holographic 3D cards. The art appears 3D or to "move" when you move the card from left to right (and vice versa).',
        CardRarity::CONFETTI->value => 'The entire card is covered in red, green and blue foil spots that look like confetti',
        CardRarity::FULL_PRISMATIC->value => 'The entire card is covered in red, green and blue foil spots that look like tiny prisms',
        CardRarity::BORDER_PRISMATIC->value => 'Only the card\'s border is covered in red, green and blue foil spots that look like tiny prisms',
        CardRarity::ART_PRISMATIC->value => 'Only the card\'s art is covered in red, green and blue foil spots that look like tiny prisms',
    ],
];
