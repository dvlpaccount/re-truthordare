<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbSosmed extends Migration
{

    public function up()
    {
        Schema::create('tb_sosmed', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('twitter');
            $table->string('instagram');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
