<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_curso');
            $table->integer('cantidad_sesiones');
            $table->date('fecha_inicio');
            $table->integer('ano');
            $table->integer('mes');
            $table->integer('dia');
            $table->time('hora_inicio')->nullable();
            $table->time('hora_receso')->nullable();
            $table->time('hora_fin')->nullable();
            $table->string('estado')->default('Disponible');
            $table->integer('cupo_maximo');
            $table->float('calificacion_aprobatoria')->nullable();
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
        Schema::dropIfExists('cursos');
    }
}
