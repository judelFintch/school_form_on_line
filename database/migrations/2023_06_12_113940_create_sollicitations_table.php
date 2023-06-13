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
        Schema::create('sollicitations', function (Blueprint $table) {
            $table->id();
            $table->string('section');
            $table->string('options');
            $table->string('classe');
            $table->unsignedInteger('id_student');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sollicitations');
    }
};
