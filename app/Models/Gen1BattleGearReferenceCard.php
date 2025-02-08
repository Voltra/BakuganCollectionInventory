<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Gen1\Cards\CardCondition;
use App\Enums\Gen1\Cards\CardLanguageType;
use App\Enums\Gen1\Cards\ReferenceCardType;
use App\Enums\Gen1\Toys\SupportAttribute;
use App\Models\Concerns\WithCardImages;
use App\Models\Contracts\Gen1ReferenceCard;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperGen1BattleGearReferenceCard
 */
class Gen1BattleGearReferenceCard extends Model implements Gen1ReferenceCard
{
    use WithCardImages;

    protected $with = [
        'frontImage',
        'backImage',
    ];

    #[\Override]
    public static function getReferenceCardType(): ReferenceCardType
    {
        return ReferenceCardType::BATTLE_GEAR;
    }

    #[\Override]
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'condition' => CardCondition::class,
            'language_type' => CardLanguageType::class,
            'left_attribute' => SupportAttribute::class,
            'right_attribute' => SupportAttribute::class,
        ]);
    }
}
