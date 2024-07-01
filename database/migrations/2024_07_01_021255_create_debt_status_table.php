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
        Schema::create('debt_status', function (Blueprint $table) {
            $table->id('status_id');
            $table->string('name', 100);
            $table->timestamps();
        });

        DB::table('debt_status')->insert([
            'name'          =>  'Active',
        ]);

        DB::table('debt_status')->insert([
            'name'          =>  'Cancelled',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('debt_status');
    }
};
