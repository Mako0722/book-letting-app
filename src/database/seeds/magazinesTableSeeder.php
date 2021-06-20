<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class magazinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'magazine' => '週刊少年ジャンプ',    
        ];
        DB::table('magazines')->insert($param);
    
        $param = [
        'magazine' => '週刊ヤングジャンプ',    
        ];
        DB::table('magazines')->insert($param);
    
        $param = [
        'magazine' => 'モーニング',    
        ];
        DB::table('magazines')->insert($param);
    
        $param = [
        'magazine' => '週刊少年マガジン',    
        ];
        DB::table('magazines')->insert($param);
        
    }
}
