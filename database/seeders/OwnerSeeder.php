<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('owners')->insert([
            [
                'name' => 'test1',
                'email' => 'admin_test1@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/02/07 22:00:00'
            ],
            [
                'name' => 'test2',
                'email' => 'admin_test2@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/02/07 22:00:00'
            ],
            [
                'name' => 'test3',
                'email' => 'admin_test3@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/02/07 22:00:00'
            ],
            [
                'name' => 'test4',
                'email' => 'admin_test4@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/02/07 22:00:00'
            ],
            [
                'name' => 'test5',
                'email' => 'admin_test5@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/02/07 22:00:00'
            ],
            [
                'name' => 'test6',
                'email' => 'admin_test6@example.com',
                'password' => Hash::make('password123'),
                'created_at' => '2024/02/07 22:00:00'
            ]
        ]);
    }
}
