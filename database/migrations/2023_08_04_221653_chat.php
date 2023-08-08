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
        Schema::create('chat', function (Blueprint $table) {
            $table->id();
            $table->text('emisor');
            $table->text('mensaje');
            $table->date('fecha');
            $table->double('porcentaje',8,2);
            $table->unsignedBigInteger('id_interaccion')->nullable();

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
        Schema::table('chat', function (Blueprint $table) {
            $table->dropForeign(['id_interaccion']);
        });
        Schema::dropIfExists('chat');
    }
};
