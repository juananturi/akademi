<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->enum('tipo_doc',['CC','CE','TI','PASS']);
            $table->string('numero_doc');
            $table->string('doc_identidad');
            $table->string('genero');
            $table->string('estrato');
            $table->unsignedBigInteger('id_municipio_nac');
            $table->unsignedBigInteger('id_municipio_exp');
            $table->unsignedBigInteger('id_curso');
            $table->foreign('id_municipio_nac')->references('id')->on('municipios')->onDelete('cascade');
            $table->foreign('id_municipio_exp')->references('id')->on('municipios')->onDelete('cascade');
            $table->foreign('id_curso')->references('id')->on('cursos')->onDelete('cascade');

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
        Schema::dropIfExists('estudiante');
    }
};
