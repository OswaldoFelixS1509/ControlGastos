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
        Schema::create('movements_types', function (Blueprint $table) {
            $table->id('movement_type_id');
            $table->string('name', 150);
            $table->string('description', 255);
            $table->timestamps();
        });

        DB::table('movements_types')->insert([
            'name'          =>  'Withdraw',
            'description'   =>  'Withdrawal of money',
        ]);

        DB::table('movements_types')->insert([
            'name'          =>  'Deposit',
            'description'   =>  'Money deposit',
        ]);

        DB::table('movements_types')->insert([
            'name'          =>  'Credit card payment',
            'description'   =>  'Credit card payment',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movements_types');
    }
};
