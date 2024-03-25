<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->post('/staffs/store',[
            'username'=>'eieikhaing',
            'password'=>'12345678',
            'user_roles'=>'admin'
        ]);
        $response->dd();

        $response->assertStatus(200);
    }
}
