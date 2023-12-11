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
        Schema::create('tecnicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('especialidad',50);

            // $table->unsignedBigInteger('id_usuario')->nullable();
            // $table->foreign('id_usuario')->references('id')->on('users');

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
        // Schema::table('interaccion', function (Blueprint $table) {
        //     $table->dropForeign(['id_usuario']);
        // });
        Schema::dropIfExists('tecnicos');
    }
};
