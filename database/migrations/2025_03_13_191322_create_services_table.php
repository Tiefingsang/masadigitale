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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('slug')->unique(); // Slug unique pour l'URL
            $table->string('short')->nullable(); 
            $table->text('description')->nullable();
            $table->text('image')->nullable();
            $table->string('icone')->nullable(); 
            $table->string('prix_min')->nullable();
            $table->string('prix_max')->nullable();
            $table->timestamps();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
