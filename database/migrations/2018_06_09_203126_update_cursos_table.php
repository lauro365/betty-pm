<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table){
            $table->integer('sala_id')->unsigned();
            $table->foreign('sala_id')->references('id')->on('salas');
            $table->integer('instruct_id')->unsigned();
            $table->foreign('instruct_id')->references('id')->on('instruct_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
