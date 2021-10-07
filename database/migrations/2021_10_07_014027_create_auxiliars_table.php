<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuxiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auxiliars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_materia')->nullable();
            $table->string('Nombre');
            $table->string('Telefono');
            $table->string('descripcion')->nullable();
            $table->string('imagen')->nullable();
            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('set null')->onUpdate('cascade');
            
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
        Schema::dropIfExists('auxiliars');
    }
}
