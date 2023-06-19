<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\User;
use Tests\TestCase;

class UsersShowTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_users_show_data_correctly(): void
    {
        User::factory(16)->create();
        $response = $this->get('/api/v1/users/show');

        $response->assertStatus(200);
//        $response->assertJsonCount(1, 'data');
//        $response->assertJsonPath('meta.0.name', 2);
    }
}
