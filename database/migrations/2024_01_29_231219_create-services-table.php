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
            $table->id(); // Integer, clé primaire auto-incrémentée
            $table->string('title'); // Chaîne de caractères pour le titre du service
            $table->text('description'); // Texte pour la description du service
            $table->string('category'); // Chaîne de caractères pour la catégorie du service
            $table->decimal('cost', 8, 2)->nullable(); // Décimal pour le coût du service (8 chiffres au total, 2 décimales)
            $table->timestamps(); // Timestamps pour la création et la mise à jour
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
