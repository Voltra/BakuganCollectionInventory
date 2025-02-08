<?php

declare(strict_types=1);

namespace Database\Helpers;

use App\Enums\Gen1\Cards\CardCondition;
use App\Enums\Gen1\Cards\CardLanguageType;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Schema\Blueprint;

abstract class Gen1CardColumns
{
    public static function pictures(Blueprint $table, bool $requireBackPicture = false): void
    {
        $table->foreignIdFor(Media::class, 'front_media_id')->constrained()->onDelete('cascade');
        $backColumn = $table->foreignIdFor(Media::class, 'back_media_id');

        if ($requireBackPicture) {
            $backColumn = $backColumn->nullable();
        }

        $backColumn->constrained()->onDelete('cascade');
    }

    public static function powerLevel(Blueprint $table)
    {
        return $table->unsignedSmallInteger('power_level')->nullable();
    }

    public static function names(Blueprint $table): void
    {
        $table->string('english_name')->index();
        $table->string('french_name')->nullable()->index();
    }

    public static function condition(Blueprint $table)
    {
        return $table->enum('condition', CardCondition::allValues())->index();
    }

    public static function effects(Blueprint $table, string $prefix = ''): void
    {
        if (! empty($prefix)) {
            $prefix = str($prefix)
                ->rtrim('_')
                ->append('_')
                ->toString();
        }

        $table->longText($prefix.'original_text')->nullable();
        $table->longText($prefix.'english_text')->nullable();
        $table->longText($prefix.'original_french_text')->nullable();
        $table->longText($prefix.'french_text')->nullable();
    }

    public static function observations(Blueprint $table)
    {
        return $table->longText('observations')->nullable();
    }

    public static function references(Blueprint $table)
    {
        $table->string('reference')->index();
        $table->string('series_reference')->index();
    }

    public static function languageType(Blueprint $table) {
        return $table->enum('language_type', CardLanguageType::allValues())->after('condition')->index();
    }
}
