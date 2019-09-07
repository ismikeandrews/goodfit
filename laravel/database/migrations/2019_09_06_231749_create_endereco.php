<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEndereco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::disableForeignKeyConstraints();
        Schema::create('tbEndereco', function (Blueprint $table) {
            $table->increments('codEndereco');
            $table->string('logradouroEndereco', 200);
            $table->string('numeroEndereco', 5);
            $table->text('complementoEndereco');
            $table->string('cepEndereco', 8);
            $table->string('bairroEndereco', 100);
            $table->string('zonaEndereco', 50);
            $table->string('cidadeEndereco', 50);
            $table->string('estadoEndereco', 50);
            $table->timestamps();
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
        Schema::dropIfExists('tbEndereco');
      Schema::enableForeignKeyConstraints();
    }
}
