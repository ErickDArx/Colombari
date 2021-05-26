<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'erick',
            'username' => 'erick',
            'password' => encrypt('12345678'),
            'email'=> 'erick@gmail.com',
            'rememberToken'=> 'texto',
            'timestamps' => csr,
        ]);
    }
}
