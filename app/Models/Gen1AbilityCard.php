<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\Gen1\Cards\AbilityCardType;
use App\Enums\Gen1\Cards\CardCondition;
use App\Enums\Gen1\Cards\CardRarity;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperGen1AbilityCard
 */
class Gen1AbilityCard extends Model
{
    #[\Override]
    protected function casts(): array
    {
        return array_merge(parent::casts(), [
            'type' => AbilityCardType::class,
            'rarity' => CardRarity::class,
            'condition' => CardCondition::class,
        ]);
    }

    /**
     * @return BelongsTo<Media>
     */
    public function image(): BelongsTo
    {
        return $this->belongsTo(Media::class);
    }
}
