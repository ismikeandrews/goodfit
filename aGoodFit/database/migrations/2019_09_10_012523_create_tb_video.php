<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbVideo extends Migration
{
  public function up(){
    Schema::disableForeignKeyConstraints();

    Schema::create('tbVideo', function(Blueprint $table){
      $table->increments('codVideo');
      $table->string('nomeVideo', 100);
      $table->time('duracaoVideo');
      $table->text('caminhoVideo');
      $table->integer('codCurso')->unsigned();
      $table->timestamps();
    });

    Schema::table('tbVideo', function($table){
      $table->foreign('codCurso')->references('codCurso')->on('tbCurso');
    });

    Schema::enableForeignKeyConstraints();
  }

  public function down(){
    Schema::disableForeignKeyConstraints();
    Schema::table('tbVideo', function (Blueprint $table) {
        $table->dropForeign(['codCurso']);
        $table->dropIfExists('tbVideo');
      });
    Schema::enableForeignKeyConstraints();
  }
}
