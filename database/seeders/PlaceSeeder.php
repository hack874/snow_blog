<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('places')->insert([
            'name'=>'カムイスキーリンクス',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    
    DB::table('places')->insert([
            'name'=>'北見若松市民スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'キロロスノーワールド',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'札幌国際スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'サッパロテイネスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ニセコアンヌプリ国際スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ニセコ東急グラン・ヒラフ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'富良野スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'星野リゾート トマムスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ルスツリゾート',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'安比高原スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'猪苗代スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'岩手高原スノーパーク',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'グランデコスノーリゾート',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'夏油高原スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'蔵王温泉スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'たざわ湖スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'星野リゾート アルツ磐梯スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'星野リゾート 猫魔スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    
    DB::table('places')->insert([
            'name'=>'箕輪スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'エーデルワイススキーリゾート',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'オグナほたかスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'川場スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'群馬みなかみ ほうだいぎスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'スノーパーク尾瀬戸倉スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'たんばらスキーパーク',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ノルン水上スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ハンターマウンテン塩原',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ホワイトワールド尾瀬岩鞍スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'丸山高原スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'石打丸山スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'エイプル白馬五竜スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ガーラ湯沢スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'かぐらスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'軽井沢プリンスホテルスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'神立スノーリゾート',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'志賀高原 寺子屋、高天ヶ原、一の瀬スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    
    DB::table('places')->insert([
            'name'=>'志賀高原 焼額山スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'志賀高原 横手山・渋峠スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'栂池高原スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'戸狩温泉スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'戸隠スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'苗場スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'野沢温泉スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'Hakuba47 ウィンタースポーツパーク',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'白馬岩岳スノーフィールド',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'白馬コルチナスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'舞子スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'妙高杉ノ原スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'竜王スキーパーク',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ロッテアライリゾート',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'あわすのスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'イオックスアローザスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'牛岳温泉スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'たいらスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    
    DB::table('places')->insert([
            'name'=>'白山一里野温泉',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'白山セイモアスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'福井和泉スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'立山山麓極楽坂スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'立山山麓らいちょうバレースキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ウイングヒルズ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'スターシュプール緑風リゾートひだ流葉スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'スノーウェーブパーク白鳥高原',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'スノーパーク イエティ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ダイナランド',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'高鷲スノーパーク',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ほおのきだいらスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ホワイトピアたかす',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'めいほうスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'鷲ヶ岳スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'グランスノー奥伊吹',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'スカイバレイスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ちくさ高原スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ハイパーボウル東鉢スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ハチ高原スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ハチ北高原スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'びわ湖バレイ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ヨココーゲン・ヤップ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'億神鍋スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'氷ノ山国際スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'井川スキー場 腕山',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'石鎚スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'久万スキーランド',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'ソルファオダススキーゲレンデ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'九重スキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    DB::table('places')->insert([
            'name'=>'五ヵ瀬ハイランドスキー場',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
    ]);
    
    }
    
}
