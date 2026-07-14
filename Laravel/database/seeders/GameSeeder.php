<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GameSeeder extends Seeder
{
    public function run(): void
    {
        //using the seeder you can run the seeder file and data insert in database table.
        DB::table('games')->insert([
            [
                'game_name' => 'Cricket 24',
                'category' => 'Sports',
                'release_year' => 2024,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_name' => 'PUBG',
                'category' => 'Battle Royale',
                'release_year' => 2018,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'game_name' => 'Minecraft',
                'category' => 'Sandbox',
                'release_year' => 2011,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
