<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SportKindSeeder extends Seeder
{
    /**
     * seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sport_kinds')->insert([
            'name' => 'スノーボード',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('sport_kinds')->insert([
            'name' => 'スキーヤー',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}

