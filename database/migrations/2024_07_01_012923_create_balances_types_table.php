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
        Schema::create('balances_types', function (Blueprint $table) {
            $table->id('balance_type_id');
            $table->string('name', 120);
            $table->string('description', 255);
            $table->timestamps();
        });

        DB::table('balances_types')->insert([
            'name'          =>  'Effective',
            'description'   =>  'Money on your wallet',
        ]);

        DB::table('balances_types')->insert([
            'name'          =>  'Debit card',
            'description'   =>  'Money on your card',
        ]);

        DB::table('balances_types')->insert([
            'name'          =>  'Money section',
            'description'   =>  'Money pulled apart from your debit card',
        ]);

        DB::table('balances_types')->insert([
            'name'          =>  'Investments',
            'description'   =>  'Money invested for growing',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('balances_types');
    }
};
