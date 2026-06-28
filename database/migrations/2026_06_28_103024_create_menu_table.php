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
        Schema::create('menu', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('label');
            $table->string('href')->nullable();
            $table->string('route')->nullable();
            $table->string('icon')->nullable();
            $table->string('aclass')->nullable();
            $table->string('badge')->nullable();
            $table->unsignedBigInteger('parent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
