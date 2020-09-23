<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbLevel extends Migration
{

    public function up()
    {
        Schema::create('tb_level', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('level');
            $table->string('info');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
