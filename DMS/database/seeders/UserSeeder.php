<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'KKO',
            'phone' => '09876543212',
            'email' => 'kko@gmail.com',
            'password' => bcrypt('password'),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'name' => 'Admin',
            'phone' => '09876543212',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
