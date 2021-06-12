<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeliculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            // titulo
            $table->string('titulo');
            // Descripcion
            $table->text('descripcion');
            // Imagen
            $table->string('image')->nullable();
            // Anio
            $table->integer('anio');
            // Duracion
            $table->string('duracion');
            // Tags
            $table->string('etiquetas');
            // Estado
            $table->enum('estado', ['activo', 'inactivo'])->default('activo');
            // Fechas por defecto
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peliculas');
    }
}
