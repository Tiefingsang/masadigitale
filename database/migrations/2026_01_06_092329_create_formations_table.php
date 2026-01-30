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
        Schema::create('formations', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slug')->unique();
            $table->text('description_courte');
            $table->longText('description_complete');
            $table->integer('duree'); // en heures ou jours
            $table->enum('niveau', ['Débutant', 'Intermédiaire', 'Avancé']);
            $table->enum('mode', ['Présentiel', 'En ligne', 'Hybride']);
            $table->decimal('prix', 10, 2)->nullable();
            $table->enum('statut', ['à venir', 'en cours', 'terminée'])->default('à venir');
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formations');
    }
};
