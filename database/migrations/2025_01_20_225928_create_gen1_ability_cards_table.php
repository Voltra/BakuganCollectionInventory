<?php

declare(strict_types=1);

use App\Enums\Gen1\Cards\AbilityCardType;
use App\Enums\Gen1\Cards\CardCondition;
use App\Enums\Gen1\Cards\CardRarity;
use App\Enums\Gen1\Toys\BakuganAttribute;
use Awcodes\Curator\Models\Media;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gen1_ability_cards', function (Blueprint $table) {
            $table->id();
            $table->enum('type', AbilityCardType::allValues())->index();
            $table->foreignIdFor(Media::class, 'front_media_id')->constrained()->onDelete('cascade');
            $table->foreignIdFor(Media::class, 'back_media_id')->nullable()->constrained()->onDelete('cascade');
            $table->enum('rarity', CardRarity::allValues())->default(CardRarity::COMMON)->index();
            $table->unsignedSmallInteger('power_level')->nullable();
            $table->string('english_name')->index();
            $table->string('french_name')->nullable()->index();
            $table->enum('condition', CardCondition::allValues())->index();
            $table->unsignedInteger('pyrus_attribute_bonus')->nullable();
            $table->unsignedInteger('aquos_attribute_bonus')->nullable();
            $table->unsignedInteger('subterra_attribute_bonus')->nullable();
            $table->unsignedInteger('haos_attribute_bonus')->nullable();
            $table->unsignedInteger('darkus_attribute_bonus')->nullable();
            $table->unsignedInteger('ventus_attribute_bonus')->nullable();
            $table->longText('original_text')->default('');
            $table->longText('english_text')->nullable();
            $table->longText('original_french_text')->nullable();
            $table->longText('french_text')->nullable();
            $table->longText('observations')->default('');
            $table->string('reference')->index();
            $table->string('series_reference')->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gen1_ability_cards');
    }
};
