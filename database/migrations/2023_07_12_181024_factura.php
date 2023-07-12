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
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('monto');
            $table->unsignedBigInteger('id_servicio_contratado')->nullable();

            $table->foreign('id_servicio_contratado')->references('id')->on('servicio_contratado');
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
        Schema::table('factura', function (Blueprint $table) {
            $table->dropForeign(['id_servicio_contratado']);
        });
        Schema::dropIfExists('factura');
    }
};
