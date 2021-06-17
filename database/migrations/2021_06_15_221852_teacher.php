<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teacher extends Migration
{

    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->string('name',25);
            $table->string('lastname',50);
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('position')->nullable();
            $table->string('group_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teacher');
    }
}
