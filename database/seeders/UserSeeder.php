<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'吉野',
            'email'=>'bo2cocoa@icloud.com',
            'password'=>bcrypt('test4579'),
            'age'=>20,
            'gender'=>'男性',
            'region'=>'新宿',
            'favorite_place'=>'神立スキー場',
            'introduction'=>'よろしくお願いします',
            'profile_image'=>'https://res.cloudinary.com/dyoyavmyk/image/upload/v1676882241/rhxqspkkwy1ogcl2rjfb.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('users')->insert([
            'name'=>'関シド',
            'email'=>'zuozaojiye@gmail.com',
            'password'=>bcrypt('Bo2fuga21'),
            'age'=>20,
            'gender'=>'男性',
            'region'=>'船橋',
            'favorite_place'=>'舞子スキー場',
            'introduction'=>'よろしくお願いします',
            'profile_image'=>'https://res.cloudinary.com/dyoyavmyk/image/upload/v1676882241/rhxqspkkwy1ogcl2rjfb.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            
        
        
        ]);
    }
}
