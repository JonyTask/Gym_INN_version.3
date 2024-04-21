<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => '5b85f7c8-daa3-4331-a6b0-9d8af1269996',
                'role' => 1,
                'first_name' => '岸辺',
                'last_name' => '露伴',
                'email' => 'dummy@gmail.com',
                'is_available' => 1,
                'password' => Hash::make('dummy'),
                'created_at' => new DateTime(),
            ],
            [
                'id' => '590302ab-0204-4cd5-b916-d6aa079cf5f7',
                'role' => 10,
                'first_name' => '浜辺',
                'last_name' => '美波',
                'email' => 'hamabe@gmail.com',
                'is_available' => 1,
                'password' => Hash::make('dummy'),
                'created_at' => new DateTime(),
            ],
            [
                'id' => '03e78219-d687-4d76-a809-8774de90844c',
                'role' => 100,
                'first_name' => '堀米',
                'last_name' => '悠人',
                'email' => 'horigome@gmail.com',
                'is_available' => 1,
                'password' => Hash::make('dummy'),
                'created_at' => new DateTime(),
            ],
            [
                'id' => '271c5ba0-a956-4474-820a-fb1214c24d29',
                'role' => 100,
                'first_name' => '上田',
                'last_name' => '綾瀬',
                'email' => 'ayase@gmail.com',
                'is_available' => 1,
                'password' => Hash::make('dummy'),
                'created_at' => new DateTime(),
            ],
        ]);
    }
}
