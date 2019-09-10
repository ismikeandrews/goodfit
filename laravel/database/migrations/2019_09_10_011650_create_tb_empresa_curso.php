<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEmpresaCurso extends Migration
{
  public function up(){
    Schema::disableForeignKeyConstraints();

    Schema::create('tbEmpresaCurso', function(Blueprint $table){
      $table->increments('codEmpresaCurso');
      $table->boolean('assistidoEmpresaCurso');
      $table->integer('codEmpresa')->unsigned();
      $table->integer('codCurso')->unsigned();
      $table->timestamps();
    });

    Schema::table('tbEmpresaCurso', function($table){
      $table->foreign('codEmpresa')->references('codEmpresa')->on('tbEmpresa');
      $table->foreign('codCurso')->references('codCurso')->on('tbCurso');
    });

    Schema::enableForeignKeyConstraints();
  }

  public function down(){
    Schema::disableForeignKeyConstraints();
    Schema::table('tbEmpresaCurso', function (Blueprint $table) {
        $table->dropForeign(['codEmpresa']);
        $table->dropForeign(['codCurso']);
        $table->dropIfExists('tbEmpresaCurso');
      });
    Schema::enableForeignKeyConstraints();
  }
}
