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
        Schema::create('medecins', function (Blueprint $table) {
            $table->id();
            $table->string("matricule", "8")->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('age');
            $table->string('sexe');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->integer("id_specialite");
            $table->integer("id_service");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medecins');
    }
};
