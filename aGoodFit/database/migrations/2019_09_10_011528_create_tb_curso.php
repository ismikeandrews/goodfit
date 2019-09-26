<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbCurso extends Migration
{
  public function up(){
    Schema::disableForeignKeyConstraints();
    Schema::create('tbCurso', function(Blueprint $table){
      $table->increments('codCurso');
      $table->string('nomeCurso', 100);
      $table->text('descricaoCurso');
      $table->timestamps();
    });
    Schema::enableForeignKeyConstraints();
  }

  public function down(){
    Schema::disableForeignKeyConstraints();
    Schema::dropIfExists('tbCurso');
    Schema::enableForeignKeyConstraints();
  }
}
