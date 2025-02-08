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

/**
 * @param $value
 * @param class-string<\UnitEnum> $enumClass
 * @return \UnitEnum|null
 */
function asEnumCase($value, string $enumClass) {
    if (!enum_exists($enumClass)) {
        return null;
    }

    if (is_a($enumClass, \BackedEnum::class)) {
        return $enumClass::tryFrom($value);
    }

    foreach ($enumClass::cases() as $case) {
        if (property_exists($case, 'value') && $case->value === $value) {
            return $case;
        }
    }

    return null;
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
