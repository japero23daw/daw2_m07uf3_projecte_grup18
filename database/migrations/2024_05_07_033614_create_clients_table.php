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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('Dni_client',9)->unique();
            $table->primary('Dni_client');
            $table->string('Nom_i_cognoms');
            $table->string('Edat');
            $table->integer('Telèfon');
            $table->string('Adreça');
            $table->string('Ciutat');
            $table->string('Email');
            $table->string('Número_del_permís_de_conducció');
            $table->integer('Punts_del_permís_de_conducció');
            $table->enum('Tipus_de_targeta',['Dèbit','Crèdit']);
            $table->string('Número_targeta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
