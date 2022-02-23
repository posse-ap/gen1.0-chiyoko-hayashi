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
        // ダミーデータ作成
            factory(BigQuestion::class)->create();

        // IndexTest.phpにfactory(BigQuestion::class)->create()を追記し、
        // ダミーレコードのnameカラムの値が「/」にアクセスした時のレスポンスに含まれている事を確認するテストコードを追記して下さい。
        // テストを実行して、全てOKになる事を確認して下さい。
            $response = $this->get('/');
            $names = BigQuestion::pluck('name');
            foreach ( $names as $name ) {
                $response->assertSee($name);
            }
    }

}
