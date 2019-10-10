<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCargoCurriculo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::disableForeignKeyConstraints();

      Schema::create('tbCargoCurriculo', function (Blueprint $table) {
        $table->bigIncrements('codCargoCurriculo');
        $table->integer('codCargo')->unsigned();
        $table->integer('codCurriculo')->unsigned();
        $table->timestamps();
      });

      Schema::table('tbCargoCurriculo', function($table){
        $table->foreign('codProfissao')->references('codProfissao')->on('tbProfissao');
        $table->foreign('codCurriculo')->references('codCurriculo')->on('tbCurriculo');
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
      Schema::table('tbCargoCurriculo', function (Blueprint $table) {
          $table->dropForeign(['codCargo']);
          $table->dropForeign(['codCurriculo']);
          $table->dropIfExists('tbCargoCurriculo');
        });
      Schema::enableForeignKeyConstraints();
    }
}
