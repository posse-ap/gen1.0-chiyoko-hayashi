<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ryosuke',
            'mail' => 'ryosuke@yamada.jp',
            'age' => '28'
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'chiyoko',
            'mail' => 'chiyoko@hayashi.jp',
            'age' => '19'
        ];
        DB::table('people')->insert($param);

        $param = [
            'name' => 'sachiko',
            'mail' => 'sachiko@happy.jp',
            'age' => '56'
        ];
        DB::table('people')->insert($param);
    }
}
