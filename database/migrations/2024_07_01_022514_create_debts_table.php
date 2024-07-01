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
        Schema::create('debts', function (Blueprint $table) {
            $table->id('debt_id');
            $table->foreignId('credit_card_id')->constrained(
                'credit_cards', 'card_id'
            );
            $table->decimal('amount', total: 10, places: 2);
            $table->foreignId('status_id')->constrained(
                'debt_status', 'status_id'
            );
            $table->tinyInteger('months');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debts');
    }
};
