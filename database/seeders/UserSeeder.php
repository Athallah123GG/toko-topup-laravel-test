<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
        	'name' => 'superAdmin',
        	'email' => 'superAdmin@gmail.com',
        	'email_verified_at' => now(),
        	'password' => bcrypt('password'),
            'role_id' => 1 ,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
