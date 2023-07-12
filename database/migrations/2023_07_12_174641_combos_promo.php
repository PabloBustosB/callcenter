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
        Schema::create('combos_promo', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('precio');
            $table->unsignedBigInteger('id_plan_internet');
            $table->unsignedBigInteger('id_plan_tvcable');
            $table->unsignedBigInteger('id_plan_llamada');

            $table->foreign('id_plan_internet')->references('id')->on('planinternets');
            $table->foreign('id_plan_tvcable')->references('id')->on('plan_tv_cables');
            $table->foreign('id_plan_llamada')->references('id')->on('plan_llamadas');
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
        Schema::table('combos_promo', function (Blueprint $table) {
            $table->dropForeign(['id_plan_internet']);
            $table->dropForeign(['id_plan_tvcable']);
            $table->dropForeign(['id_plan_llamada']);
        });
        Schema::dropIfExists('combos_promo');
    }
};
