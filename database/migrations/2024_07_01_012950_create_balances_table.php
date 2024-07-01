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
        Schema::create('balances', function (Blueprint $table) {
            $table->id('balance_id');
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade');
            $table->decimal('amount', total: 10, places: 2);
            $table->string('name', 255);
            $table->foreignId('balance_type_id')->constrained(
                'balances_types' , 'balance_type_id'
            );
            $table->softDeletes('deleted_at', precision: 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
