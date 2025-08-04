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
        Schema::create('pubs', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titre de la publicité
            $table->text('description')->nullable(); // Description de la publicité
            $table->string('slug')->unique(); // Slug unique pour la publicité
            $table->string('image')->nullable(); // Image de la publicité
            $table->string('link')->nullable(); // Lien associé à la publicité
            $table->timestamp('start_date')->nullable(); // Date de début de la publicité
            $table->timestamp('end_date')->nullable(); // Date de fin de la publicité
            $table->boolean('is_active')->default(true); //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pubs');
    }
};
