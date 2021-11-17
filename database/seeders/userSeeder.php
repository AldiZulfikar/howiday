<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Aldi',
            'email' => 'aldizulfikar04@gmail.com',
            'password' => Hash::make('cuanterus'),
            'roles' => 'ADMIN',
            'username' => 'AldiZulfikar',
        ]);
    }
}
