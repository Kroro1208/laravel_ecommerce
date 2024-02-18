<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shops')->insert([
            [
                'owner_id' => '1',
                'name' => '店舗名',
                'information' => 'お店の情報を表示',
                'filename' =>'',
                'is_selling' => true,
                'created_at' => '2024/02/07 22:00:00'
            ],
            [
                'owner_id' => '2',
                'name' => '店舗名',
                'information' => 'お店の情報を表示',
                'filename' =>'',
                'is_selling' => true,
                'created_at' => '2024/02/07 22:00:00'
            ]
        ]);
    }
}
