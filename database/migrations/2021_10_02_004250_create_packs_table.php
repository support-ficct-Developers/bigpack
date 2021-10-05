<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_materia')->nullable();
            $table->unsignedBigInteger('id_docente')->nullable();
            $table->string('link');
            $table->string('descripcion')->nullable();
            $table->foreign('id_materia')->references('id')->on('materias')->onDelete('set null')->onUpdate('cascade');
            $table->foreign('id_docente')->references('id')->on('docentes')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('packs');
    }
}
