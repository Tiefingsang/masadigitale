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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nom complet
            $table->string('position'); // Poste/Position
            $table->text('bio')->nullable(); // Biographie/Description
            $table->string('image')->nullable(); // Chemin de la photo
            $table->integer('order')->default(0); // Pour trier l'affichage
            $table->boolean('is_active')->default(true); // Pour activer/désactiver
            $table->json('social_links')->nullable(); // Liens réseaux sociaux

            // Pour gérer les catégories si besoin (direction, tech, marketing...)
            $table->string('category')->nullable();

            // Infos supplémentaires
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('department')->nullable();

            $table->timestamps();
            $table->softDeletes(); // Pour supprimer sans perdre les données
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
