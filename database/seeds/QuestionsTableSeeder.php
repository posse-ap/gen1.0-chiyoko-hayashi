<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'やまだりょうすけクイズ'
        ];
        DB::table('questions')->insert($param);

        $param = [
            'name' => '広島県の難読地名クイズ'
        ];
        DB::table('questions')->insert($param);
    }
}
