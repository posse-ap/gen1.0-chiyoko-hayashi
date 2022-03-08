<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use App\Person;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class HelloTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHello()
    {
        // ダミーで利用するデータ
        factory(User::class)->create([
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);
        factory(User::class, 10)->create();

        $this->assertDatabaseHas('users', [
            'name' => 'AAA',
            'email' => 'BBB@CCC.com',
            'password' => 'ABCABC',
        ]);

        // ダミーで利用するデータ
        factory(Person::class)->create([
            'name' => 'AAA',
            'mail' => 'BBB@CCC.com',
            'age' => '19',
        ]);
        factory(Person::class, 10)->create();

        $this->assertDatabaseHas('people', [
            'name' => 'AAA',
            'mail' => 'BBB@CCC.com',
            'age' => '20',
        ]);
    }
}
