<?php

use App\Enums\Gen1\Cards\CardRarity;

return [
    'labels' => [
        CardRarity::COMMON->value => 'Commune',
        CardRarity::FOIL->value => 'Brillante',
        CardRarity::BRONZE_ATTACK->value => 'Bronze attack',
        CardRarity::HOLO_3D->value => '3D rare',
        CardRarity::CONFETTI->value => 'Confetti rare',
        CardRarity::FULL_PRISMATIC->value => 'Entièrement Prismatique',
        CardRarity::BORDER_PRISMATIC->value => 'Bordure Prismatique',
        CardRarity::ART_PRISMATIC->value => 'Dessin Prismatique',
    ],
    'descriptions' => [
        CardRarity::COMMON->value => 'Rareté par défaut, rien de spécial.',
        CardRarity::FOIL->value => 'Le titre et certaines parties de la carte sont d\'une couleur brillante argentée',
        CardRarity::BRONZE_ATTACK->value => 'La rareté des cartes provenant des packs Bronze Attack. La silouhette du personnage est d\'une couleur brillante dorée.',
        CardRarity::HOLO_3D->value => 'Cartes "3D" holographiques. Le dessin de la carte semble être en relief et bouger quand on oriente la carte de droite à gauche (et vice versa).',
        CardRarity::CONFETTI->value => 'La carte est intégralement tachetée de petites "confettis" rouges, bleus ou verts.',
        CardRarity::FULL_PRISMATIC->value => 'La carte est intégralement tachetée de petits "prismes" rouges, bleus ou verts.',
        CardRarity::BORDER_PRISMATIC->value => 'Seule la bordure de la carte est tachetée de petits "prismes" rouges, bleus ou verts.',
        CardRarity::ART_PRISMATIC->value => 'Seul le dessin de la carte est tacheté de petits "prismes" rouges, bleus ou verts.',
    ],
];
