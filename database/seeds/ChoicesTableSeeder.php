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
            'big_question_id' => '1',
            'name' => 'たかなわ',
            'valid' => '1',

        ];
        DB::table('choices')->insert($param);

        $param = [
            'big_question_id' => '1',
            'name' => 'たかわ',
            'valid' => '1',

        ];
        DB::table('choices')->insert($param);

        $param = [
            'big_question_id' => '1',
            'name' => 'こうわ',
            'valid' => '1',

        ];
        DB::table('choices')->insert($param);

        $param = [
            'big_question_id' => '3',
            'name' => 'むこうひら',
            'valid' => '1',

        ];
        DB::table('choices')->insert($param);

        $param = [
            'big_question_id' => '3',
            'name' => 'むきひら',
            'valid' => '1',

        ];
        DB::table('choices')->insert($param);

        $param = [
            'big_question_id' => '3',
            'name' => 'むかいなだ',
            'valid' => '1',

        ];
        DB::table('choices')->insert($param);

    }
}
