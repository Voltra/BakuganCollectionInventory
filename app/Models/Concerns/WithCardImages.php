<?php

declare(strict_types=1);

namespace App\Models\Concerns;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @extends Model
 *
 * @augments Model
 */
trait WithCardImages
{
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
}
