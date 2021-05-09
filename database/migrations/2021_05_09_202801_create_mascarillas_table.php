<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascarillasTable extends Migration
{

    public function up()
    {
        Schema::create('mascarillas', function (Blueprint $table) {
            $table->bigIncrements('id_mascarilla');
            $table->string('nombre');
            $table->string('img');
            $table->integer('categoria');
            $table->decimal('precio',8,2);
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mascarillas');
    }
}
