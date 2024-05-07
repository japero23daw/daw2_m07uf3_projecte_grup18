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
        Schema::create('autos', function (Blueprint $table) {
            $table->string('Matricula_auto',7)->unique();
            $table->primary('Matricula_auto');
            $table->integer('Numero_bastidor');
            $table->string('Marca');
            $table->string('Model');
            $table->string('Color');
            $table->integer('Numero_places');
            $table->integer('Numero_portes');
            $table->enum('Tipus_combustible',['Gasolina','Diesel','elèctric']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autos');
    }
};
