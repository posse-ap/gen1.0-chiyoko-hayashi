<?php

use Illuminate\Database\Seeder;

class BigQuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'question_id' => '1',
            'image' => 'takanawa',
            'explanation' => '正解は「たかなわ」です！たかなわは〜〜'
        ];
        DB::table('big_questions')->insert($param);

        $param = [
            'question_id' => '1',
            'image' => 'kameido',
            'explanation' => '正解は「かめいど」です！かめいどは〜〜'
        ];

        $param = [
            'question_id' => '2',
            'image' => 'mukouhira',
            'explanation' => '正解は「むこうひら」です！むこうひらは〜〜'
        ];
        DB::table('big_questions')->insert($param);
    }
}
