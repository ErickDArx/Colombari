<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Docentes extends Migration
{
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {

            $table->string('docente_id');
            $table->string('name',25);
            $table->string('lastname',50);
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('position')->nullable();
            $table->string('group_id');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('group_id')->references('_id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
        });
    }
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
