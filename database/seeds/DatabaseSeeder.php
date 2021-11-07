<?php

// namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(ChoicesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(BigQuestionsTableSeeder::class);
    }
}
