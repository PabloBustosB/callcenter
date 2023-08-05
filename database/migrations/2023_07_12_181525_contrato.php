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
        Schema::create('contrato', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_inicio')->nullable();
            $table->date('fecha_fin')->nullable();
            $table->string('estado');
            $table->string('nombre_facturacion');
            $table->string('nit');
            $table->unsignedBigInteger('id_servicio_contratado')->nullable();
            $table->unsignedBigInteger('id_usuario')->nullable();

            $table->foreign('id_servicio_contratado')->references('id')->on('servicio_contratado');
            $table->foreign('id_usuario')->references('id')->on('users');
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
        Schema::table('contrato', function (Blueprint $table) {
            $table->dropForeign(['id_servicio_contratado']);
            $table->dropForeign(['id_usuario']);
        });
        Schema::dropIfExists('contrato');
    }
};
