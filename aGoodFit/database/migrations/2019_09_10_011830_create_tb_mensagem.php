<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbMensagem extends Migration
{
  public function up(){
    Schema::disableForeignKeyConstraints();

    Schema::create('tbMensagem', function(Blueprint $table){
      $table->increments('codMensagem');
      $table->text('textoMensagem');
      $table->timestamp('dataEnvioMensagem');
      $table->integer('codRemetente')->unsigned();
      $table->integer('codDestinatario')->unsigned();
      $table->timestamps();
    });

    Schema::table('tbMensagem', function($table){
      $table->foreign('codRemetente')->references('codUsuario')->on('tbUsuario');
      $table->foreign('codDestinatario')->references('codUsuario')->on('tbUsuario');
    });

    Schema::enableForeignKeyConstraints();
  }

  public function down(){
    Schema::disableForeignKeyConstraints();
    Schema::table('tbMensagem', function (Blueprint $table) {
        $table->dropForeign(['codRemetente']);
        $table->dropForeign(['codDestinatario']);
        $table->dropIfExists('tbMensagem');
      });
    Schema::enableForeignKeyConstraints();
  }
}
