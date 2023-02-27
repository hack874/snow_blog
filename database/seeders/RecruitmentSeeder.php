<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Date;

class RecruitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recruitments')->insert([
            'user_id' => 1,
            'comment' => '主にグラトリをメインに滑っております。4人募集してます。車は私が出します。',
            'place' => '栂池高原スキー場',
            'date' => date('2023-03-03'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
