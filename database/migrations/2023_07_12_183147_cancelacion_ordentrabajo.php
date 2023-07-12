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
        Schema::create('cancelacion_ordentrabajo', function (Blueprint $table) {
            $table->id();
            $table->text('justification');
            $table->date('fecha');
            $table->unsignedBigInteger('id_orden_trabajo')->nullable();

            $table->foreign('id_orden_trabajo')->references('id')->on('ordentrabajo');
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
        Schema::table('cancelacion_ordentrabajo', function (Blueprint $table) {
            $table->dropForeign(['id_orden_trabajo']);
        });
        Schema::dropIfExists('cancelacion_ordentrabajo');
    }
};
