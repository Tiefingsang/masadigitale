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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique(); // Slug unique pour l'URL
            $table->string('name'); // Nom de l'expéditeur
            $table->string('email'); // Email de l'expéditeur
            $table->string('subject')->nullable(); // Numéro de téléphone
            $table->text('message'); // Message envoyé
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
