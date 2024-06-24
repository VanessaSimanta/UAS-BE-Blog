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
        Schema::create('myod-kopi-inspirasi', function (Blueprint $table) {
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('subject', 200);
            $table->string('message', 1000);
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
