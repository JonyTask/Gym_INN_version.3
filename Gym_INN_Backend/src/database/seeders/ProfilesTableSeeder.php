<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            [
                'id' => Str::uuid(),
                'user_id' => '5b85f7c8-daa3-4331-a6b0-9d8af1269996',
                'gym_id' => 1,
                'display_name' => 'Rohan Kishibe',
                'age' => 25,
                'occupation' => '漫画家',
                'description' => '杜王町という街で漫画を描いています。最近はNHKでスピンオフ作品が流行り、収入源が増えました。結婚願望あります。'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => '590302ab-0204-4cd5-b916-d6aa079cf5f7',
                'gym_id' => 1,
                'display_name' => 'minami',
                'age' => 23,
                'occupation' => '女優',
                'description' => '最近はCM,大河ドラマなんかに出ています。可愛すぎる。'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => '03e78219-d687-4d76-a809-8774de90844c',
                'gym_id' => 2,
                'display_name' => 'yuto',
                'age' => 23,
                'occupation' => 'スケーター',
                'description' => 'バチイケのスニーカーを履き、街中を滑っています。'
            ],
            [
                'id' => Str::uuid(),
                'user_id' => '271c5ba0-a956-4474-820a-fb1214c24d29',
                'gym_id' => 2,
                'display_name' => 'ayase',
                'age' => 25,
                'occupation' => 'サッカー選手',
                'description' => 'オランダでボール蹴ってます。妻がめちゃめちゃ綺麗です。'
            ]
        ]);
    }
}
