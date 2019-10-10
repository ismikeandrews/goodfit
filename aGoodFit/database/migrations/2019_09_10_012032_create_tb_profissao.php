<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbProfissao extends Migration
{
  public function up(){
    Schema::disableForeignKeyConstraints();

    Schema::create('tbProfissao', function(Blueprint $table){
      $table->increments('codProfissao');
      $table->string('nomeProfissao', 100)->unique();
      $table->timestamps();
    });

    Schema::enableForeignKeyConstraints();
  }

  public function down(){
    Schema::disableForeignKeyConstraints();
    Schema::dropIfExists('tbProfissao');
    Schema::enableForeignKeyConstraints();
  }
}
