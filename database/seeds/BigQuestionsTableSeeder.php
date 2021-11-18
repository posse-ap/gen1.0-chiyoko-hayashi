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
            'image' => '1.jpg',
            'sentence' => '正しい表記は？',
            'explanation' => '正解は「山田涼介」です！山田涼介は〜〜'
        ];
        DB::table('big_questions')->insert($param);

        $param = [
            'question_id' => '1',
            'image' => '2.jpg',
            'sentence' => 'この画像がビジュアルのやまだりょうすけ主演の映画は？',
            'explanation' => '正解は「記憶屋」です！記憶屋は〜〜'
        ];
        DB::table('big_questions')->insert($param);

        $param = [
            'question_id' => '2',
            'image' => 'mukouhira',
            'sentence' => 'この地名はなんて読む？',
            'explanation' => '正解は「むこうひら」です！むこうひらは〜〜'
        ];
        DB::table('big_questions')->insert($param);
    }
}
