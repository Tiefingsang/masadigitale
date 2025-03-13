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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom du client
            $table->string('email')->unique(); // Email unique du client
            $table->string('telephone')->nullable(); // Numéro de téléphone
            $table->string('address')->nullable(); // Adresse du client
            $table->string('image')->nullable(); // Adresse du client
            $table->text('description')->nullable(); // De
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
