<?php

use App\Enums\Gen1\Cards\CardLanguageType;
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
        Schema::table('gen1_ability_cards', function (Blueprint $table) {
            Gen1CardColumns::languageType($table)->after('condition');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gen1_ability_cards', function (Blueprint $table) {
            $table->dropColumn(['language_type']);
        });
    }
};
