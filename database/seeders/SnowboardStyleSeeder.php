<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SnowboardStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('snowboard_styles')->insert([
            'name' => 'フリースタイル',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
            DB::table('snowboard_styles')->insert([
            'name' => 'パーク',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
            DB::table('snowboard_styles')->insert([
            'name' => 'ジブ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
            DB::table('snowboard_styles')->insert([
            'name' => 'グラトリ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
             DB::table('snowboard_styles')->insert([
            'name' => 'パウダー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
