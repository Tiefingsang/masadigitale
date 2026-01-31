<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('slug')->unique();
            $table->string('description_courte', 255);
            $table->text('description_complete');
            $table->string('client')->nullable();
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->enum('statut', ['realises', 'en_cours', 'avenir'])->default('realises');
            $table->string('categorie')->nullable();
            $table->json('technologies')->nullable();
            $table->decimal('budget', 10, 2)->nullable();
            $table->string('image_principale')->nullable();
            $table->json('images')->nullable();
            $table->string('lien_demo')->nullable();
            $table->string('lien_github')->nullable();
            $table->string('meta_titre')->nullable();
            $table->text('meta_description')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->integer('ordre_affichage')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projets');
    }
};
