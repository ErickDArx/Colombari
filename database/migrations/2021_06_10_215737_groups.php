<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Groups extends Migration
{
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {

            $table->string('grade');
            $table->string('name');
            $table->number('group');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
