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
        Schema::create('interaccion', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->text('descripcion')->nullable(); // % satisfaccion
            $table->unsignedBigInteger('id_tipo_servicio_tecnico')->nullable();
            $table->unsignedBigInteger('id_usuario')->nullable();

            $table->foreign('id_tipo_servicio_tecnico')->references('id')->on('tipo_servicios_tecnicos');
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
        Schema::table('interaccion', function (Blueprint $table) {
            $table->dropForeign(['id_tipo_servicio_tecnico']);
            $table->dropForeign(['id_usuario']);
        });
        Schema::dropIfExists('interaccion');
    }
};
