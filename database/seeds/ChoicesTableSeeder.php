<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChoicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            [
            'big_question_id' => '1',
            'name' => '山田涼介',
            'valid' => true,
            ],
            [
            'big_question_id' => '1',
            'name' => '山田亮介',
            'valid' => false,
            ],
            [
            'big_question_id' => '1',
            'name' => '山田良輔',
            'valid' => false,
            ],
            [
            'big_question_id' => '2',
            'name' => '記憶屋',
            'valid' => true,
            ],
            [
            'big_question_id' => '2',
            'name' => '奇跡屋',
            'valid' => false,
            ],
            [
            'big_question_id' => '2',
            'name' => '探偵屋',
            'valid' => false,
            ],
            [            
            'big_question_id' => '3',
            'name' => 'むきひら',
            'valid' => true,
            ],
            [
            'big_question_id' => '3',
            'name' => 'むかいなだ',
            'valid' => false,
            ],
            [
            'big_question_id' => '3',
            'name' => 'むこうなだ',
            'valid' => false,
            ],
        ];
        DB::table('choices')->insert($param);
    }
}
