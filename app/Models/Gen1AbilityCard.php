<?php

declare(strict_types=1);

namespace App\Models;

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
            'type' => Gen1AbilityCard::class,
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
