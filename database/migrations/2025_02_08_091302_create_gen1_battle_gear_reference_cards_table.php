<?php

declare(strict_types=1);

use App\Enums\Gen1\Toys\SupportAttribute;
use Database\Helpers\Gen1CardColumns;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gen1_battle_gear_reference_cards', function (Blueprint $table) {
            $table->id();
            Gen1CardColumns::pictures($table);
            Gen1CardColumns::powerLevel($table);
            Gen1CardColumns::names($table);
            Gen1CardColumns::condition($table);
            Gen1CardColumns::languageType($table);
            $table->enum('left_attribute', SupportAttribute::allValues());
            $table->enum('right_attribute', SupportAttribute::allValues());
            Gen1CardColumns::effects($table, prefix: 'left');
            Gen1CardColumns::effects($table, prefix: 'right');
            Gen1CardColumns::observations($table);
            Gen1CardColumns::references($table);
            $table->timestamps();
        });

        /*DB::statement(<<<'SQL'
            ALTER TABLE gen1_battle_gear_reference_cards
            ADD CONSTRAINT different_attributes
            CHECK (left_attribute <> right_attribute);
        SQL);*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gen1_battle_gear_reference_cards');
    }
};
