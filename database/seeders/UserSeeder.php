<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'password' => '$2y$10$prvItL.CqO1VmdniKONkQ.BAv7zthWtXuNj.iPxfKF5Rjeg1LDg6a',
                'role_id' => 3,
            ],
            [
                'name' => 'admin2',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('12345678'),
                'role_id' => 3,
            ],
        ]);
    }
}
