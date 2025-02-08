<?php

declare(strict_types=1);

/**
 * Translate the given message.
 *
 * @return Closure(): (string|array|null)
 */
function __l(?string $key = null, array $replace = [], ?string $locale = null): Closure
{
    return fn () => __($key, $replace, $locale);
}

if (! class_exists('\Override')) {
    #[Attribute(
        Attribute::TARGET_METHOD |
        Attribute::TARGET_PROPERTY |
        Attribute::TARGET_CLASS_CONSTANT)]
    final class Override
    {
        public function __construct() {}
    }
}
