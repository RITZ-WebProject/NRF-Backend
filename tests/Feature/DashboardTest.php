<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Dashboard()
    {
        $response = $this->post('/custom-login',[
            'username'=>'superadmin',
            'password'=>'12345678'
        ]);

        // $response->dd();
        $response->assertStatus(200);
    }
}
