<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCategoria extends Migration
{
  public function up(){
    Schema::disableForeignKeyConstraints();
    Schema::create('tbCategoria', function(Blueprint $table){
      $table->increments('codCategoria');
      $table->string('imagemCategoria');
      $table->string('nomeCategoria', 100)->unique();
      $table->integer('codProfissao')->unsigned();
      $table->timestamps();
    });
    Schema::table('tbCategoria', function($table){
      $table->foreign('codProfissao')->references('codProfissao')->on('tbProfissao');
    });
    Schema::enableForeignKeyConstraints();
  }

  public function down(){
    Schema::disableForeignKeyConstraints();
    Schema::table('tbCategoria', function (Blueprint $table) {
        $table->dropForeign(['tbProfissao']);
        $table->dropIfExists('codCategoria');
      });
    Schema::enableForeignKeyConstraints();
  }
}
