<?php

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
        Schema::create('movements', function (Blueprint $table) {
            $table->id('movement_id');
            $table->string('concept', 255);
            $table->decimal('amount', total: 10, places: 2);
            $table->foreignId('balance_id')->constrained(
               'balances', 'balance_id'
            );
            $table->decimal('remaining_balance', total: 10, places: 2);
            $table->foreignId('movement_type_id')->constrained(
                'movements_types','movement_type_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movements');
    }
};
