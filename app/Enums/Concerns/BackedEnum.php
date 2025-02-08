<?php

declare(strict_types=1);

namespace App\Enums\Concerns;

use StringBackedEnum;

/**
 * @mixin StringBackedEnum
 */
trait BackedEnum
{
    public static function allValues(): array
    {
        return array_map(fn ($case) => $case->value, self::cases());
    }
}
