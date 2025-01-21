<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Gen1\Cards\AbilityCardType;
use App\Enums\Gen1\Cards\CardCondition;
use App\Enums\Gen1\Cards\CardRarity;
use App\Enums\Gen1\Toys\BakuganAttribute;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperGen1AbilityCard
 */
class Gen1AbilityCard extends Model
{
    protected $with = [
        'front_image',
        'back_image',
    ];

    /**
     * @return BelongsTo<Media, $this>
     */
    public function frontImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'front_media_id', 'id');
    }

    /**
     * @return BelongsTo<Media, $this>
     */
    public function backImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'back_media_id', 'id');
    }

    #[\Override]
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'type' => AbilityCardType::class,
            'rarity' => CardRarity::class,
            'condition' => CardCondition::class,
            'highlighted_bonus_attribute' => BakuganAttribute::class,
        ]);
    }
}
