<?php

declare(strict_types=1);

namespace App\Models\Contracts;

use App\Enums\Gen1\Cards\ReferenceCardType;

interface Gen1ReferenceCard
{
    public static function getReferenceCardType(): ReferenceCardType;
}
