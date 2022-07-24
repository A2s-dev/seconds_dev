<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class HomeTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
    }

    /**
     * @test
     * 
     */
    public function homeView()
    {
        $this->actingAs($this->user);

        $response = $this->get(route('home'));
        $response->assertViewIs('home')->assertSee($this->user->name);
    }
}
