<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('tbUsuario', function (Blueprint $table) {
            $table->increments('codUsuario');
            $table->string('loginUsuario', 50);
            $table->string('senhaUsuario', 50);
            $table->string('emailUsuario', 150)->unique();
            $table->rememberToken();
            $table->unsignedInteger('codEndereco')->unsigned()->nullable();
            $table->unsignedInteger('codNivelUsuario')->unsigned();
            $table->timestamps();

        });
        Schema::table('tbUsuario', function ($table) {
            $table->foreign('codEndereco')->references('codEndereco')->on('tbEndereco');
            $table->foreign('codNivelUsuario')->references('codNivelUsuario')->on('tbNivelUsuario');
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::disableForeignKeyConstraints();
        Schema::table('tbUsuario', function (Blueprint $table) {
          $table->dropForeign(['codEndereco']);
          $table->dropForeign(['codNivelUsuario']);
          $table->dropIfExists('tbUsuario');
        });
      Schema::enableForeignKeyConstraints();
    }
}
