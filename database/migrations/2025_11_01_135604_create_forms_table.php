<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{
        Schema::create('forms', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('quartier');
        $table->string('sexe')->nullable();
        $table->string('telephone');
        $table->string('ordinateur');
        $table->string('niveau_etude');
        $table->string('metier');
        $table->timestamps();}
        );
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};
