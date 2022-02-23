<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\BigQuestion;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        // $value = '東京の難読地名クイズ';
        // $response->assertSee($value);
        // $response->assertStatus(200);
        // parent::testExample();
        factory(BigQuestion::class)->create();
        $response->assertSee("Merlin Gorczany");
    }
}
