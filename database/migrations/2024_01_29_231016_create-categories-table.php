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
        
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Integer, clé primaire auto-incrémentée
            $table->string('name'); // Chaîne de caractères pour le nom de la catégorie
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
