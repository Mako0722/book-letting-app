<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class authorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'author' => '尾田栄一郎',    
        ];
        DB::table('authors')->insert($param);
    
        $param = [
        'author' => '富樫義博',    
        ];
        DB::table('authors')->insert($param);
    
        $param = [
        'author' => '井上雄彦',    
        ];
        DB::table('authors')->insert($param);
    
        $param = [
        'author' => '流石景',    
        ];
        DB::table('authors')->insert($param);
    
        $param = [
        'author' => 'うえやまとち',    
        ];
        DB::table('authors')->insert($param);
    }
}
