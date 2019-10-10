<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbVaga extends Migration
{
  public function up(){
    Schema::disableForeignKeyConstraints();

    Schema::create('tbVaga', function(Blueprint $table){
      $table->increments('codVaga');
      $table->text('descricaoVaga');
      $table->double('salarioVaga');
      $table->time('cargaHorariaVaga');
      $table->integer('quantidadeVaga');
      $table->integer('codProfissao')->unsigned();
      $table->integer('codEndereco')->unsigned();
      $table->integer('codRegimeContratacao')->unsigned();
      $table->timestamps();
    });

    Schema::table('tbVaga', function($table){
      $table->foreign('codProfissao')->references('codProfissao')->on('tbProfissao');
      $table->foreign('codEndereco')->references('codEndereco')->on('tbEndereco');
      $table->foreign('codRegimeContratacao')->references('codRegimeContratacao')->on('tbRegimeContratacao');
    });

    Schema::enableForeignKeyConstraints();
  }

  public function down(){
    Schema::disableForeignKeyConstraints();
    Schema::table('tbVaga', function (Blueprint $table) {
        $table->dropForeign(['codProfissao']);
        $table->dropForeign(['codEndereco']);
        $table->dropForeign(['codRegimeContratacao']);
        $table->dropIfExists('tbVaga');
      });
    Schema::enableForeignKeyConstraints();
  }
}
