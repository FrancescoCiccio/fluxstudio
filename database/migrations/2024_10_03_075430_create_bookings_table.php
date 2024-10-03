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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slot_id')->constrained('slots')->onDelete('cascade'); // Lo slot prenotato
            $table->date('date');
            $table->string('email'); // Email dell'utente che prenota
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('set null'); // Associare un utente se registrato
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
