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
        Schema::create('desafiament_pregunta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('desafiament_id')->constrained()->onDelete('cascade');
            $table->foreignId('pregunta_id')->constrained()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desafiament_pregunta');
    }
};
