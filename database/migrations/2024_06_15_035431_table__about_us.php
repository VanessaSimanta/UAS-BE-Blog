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
        Schema::create('AboutUs', function (Blueprint $table) {
            $table->integerIncrements('id')->primary();
            $table->string('title', 50);
            $table->string('description', 500);
            $table->string('img_team', 500);
            
    });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
