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
        Schema::create('bandas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('estilo');
            $table->date('ano_criacao');
            $table->integer('total_de_discos');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bandas');
    }
};
