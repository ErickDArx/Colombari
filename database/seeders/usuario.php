<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class usuario extends Seeder
{

    public function run()
    {
        DB::table('teacher')->insert([
            'name' => 'erick',
            'username' => 'erick',
            'password' => encrypt('12345678'),
            'email'=> 'erick@gmail.com',
            'rememberToken'=> 'texto',
        ]);

        DB::table('groups')->insert([
            'name'=>'Grupo 1',
            'grade'=>'Materno',
        ]);
    }
}
