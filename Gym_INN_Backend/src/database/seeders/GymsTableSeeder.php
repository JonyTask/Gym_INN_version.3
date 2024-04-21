<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GymsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('gyms')->insert([
            [
                'prefecture_id' => 13,
                'name' => 'エニタイムフィットネス',
                'area' => '金町駅前店',
                'address' => '東京都葛飾区東金町1-43-1 常総金町ビル 3F',
                'created_at' => new DateTime(),
            ],
            [
                'prefecture_id' => 12,
                'name' => 'エニタイムフィットネス',
                'area' => '船橋本町通り店',
                'address' => '千葉県船橋市宮本1丁目21-10',
                'created_at' => new DateTime(),
            ],
        ]);
    }
}
