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
        Schema::create('ordentrabajo', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_visita');
            $table->text('problema'); 
            $table->text('resultado')->nullable();
            $table->string('estado');
            $table->text('descripcion'); // Solo es para Soporte
            $table->dateTime('fecha_hora_visita_llegada');
            $table->dateTime('fecha_hora_visita_salida');
            $table->unsignedBigInteger('id_tecnico')->nullable();
            $table->unsignedBigInteger('id_interaccion')->nullable();

            $table->foreign('id_tecnico')->references('id')->on('tecnicos');
            $table->foreign('id_interaccion')->references('id')->on('interaccion');
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
        Schema::table('ordentrabajo', function (Blueprint $table) {
            $table->dropForeign(['id_tecnico']);
            $table->dropForeign(['id_interaccion']);
        });
        Schema::dropIfExists('ordentrabajo');
    }
};
