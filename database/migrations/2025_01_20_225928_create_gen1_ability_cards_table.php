<?php

declare(strict_types=1);

use App\Enums\Gen1\Cards\AbilityCardType;
use App\Enums\Gen1\Cards\CardCondition;
use App\Enums\Gen1\Cards\CardRarity;
use App\Enums\Gen1\Toys\BakuganAttribute;
use Awcodes\Curator\Models\Media;
use Database\Helpers\Gen1CardColumns;
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
            Gen1CardColumns::pictures($table);
            $table->enum('rarity', CardRarity::allValues())->default(CardRarity::COMMON)->index();
            Gen1CardColumns::powerLevel($table);
            Gen1CardColumns::names($table);
            Gen1CardColumns::condition($table);
            $table->unsignedInteger('pyrus_attribute_bonus')->nullable();
            $table->unsignedInteger('aquos_attribute_bonus')->nullable();
            $table->unsignedInteger('subterra_attribute_bonus')->nullable();
            $table->unsignedInteger('haos_attribute_bonus')->nullable();
            $table->unsignedInteger('darkus_attribute_bonus')->nullable();
            $table->unsignedInteger('ventus_attribute_bonus')->nullable();
            Gen1CardColumns::effects($table);
            Gen1CardColumns::observations($table);
            Gen1CardColumns::references($table);
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
