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
        Schema::create('servicio_contratado', function (Blueprint $table) {
            $table->id();
            $table->string('estadoservicio');
            $table->text('observacion');
            $table->unsignedBigInteger('id_plan_internet')->nullable();
            $table->unsignedBigInteger('id_plan_tvcable')->nullable();
            $table->unsignedBigInteger('id_plan_llamada')->nullable();
            $table->unsignedBigInteger('id_combo_promo')->nullable();

            $table->foreign('id_plan_internet')->references('id')->on('planinternets');
            $table->foreign('id_plan_tvcable')->references('id')->on('plan_tv_cables');
            $table->foreign('id_plan_llamada')->references('id')->on('plan_llamadas');
            $table->foreign('id_combo_promo')->references('id')->on('combos_promo');
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
        Schema::table('servicio_contratado', function (Blueprint $table) {
            $table->dropForeign(['id_plan_internet']);
            $table->dropForeign(['id_plan_tvcable']);
            $table->dropForeign(['id_plan_llamada']);
            $table->dropForeign(['id_combo_promo']);
        });
        Schema::dropIfExists('servicio_contratado');
    }
};
