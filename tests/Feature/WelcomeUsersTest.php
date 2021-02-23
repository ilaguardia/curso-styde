<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function welcome_users_with_nickname()
    {
        $response = $this->get('/saludo/berta/bigberta');
        $response->assertStatus(200);
        $response->assertSee("Bienvenido Berta, tu apodo es bigberta", true);
    }
    
    /** @test */
    public function welcome_users_without_nickname()
    {
        $response = $this->get('/saludo/berta');
        $response->assertStatus(200);
        $response->assertSee('Bienvenido Berta', true);
    }
}
