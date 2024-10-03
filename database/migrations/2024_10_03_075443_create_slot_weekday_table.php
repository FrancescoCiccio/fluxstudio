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
        Schema::create('slot_weekday', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slot_id')->constrained('slots')->onDelete('cascade'); // Associa slot
            $table->unsignedTinyInteger('day_of_week'); // Giorno della settimana (0=Sunday, 1=Monday, ..., 6=Saturday)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slot_weekday');
    }
};
