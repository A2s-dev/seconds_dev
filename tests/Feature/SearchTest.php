<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;

class SearchTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->post = Post::factory()->create();
    }

    /**
     * @test
     * 
     */
    public function searchView()
    {
        $this->actingAs($this->user);

        $key = $this->post->title;

        $response = $this->get(route('post.search'), [$key]);
        $response->assertViewIs('search');
    }
}
