<?php

// namespace Database\Seeders;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ChoicesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        // $this->call(TestTableSeeder::class);
    }
}
