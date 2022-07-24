<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;

class ReviewTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->post = Post::factory()->create();

        $this->data =
            [
                'id' => $this->post->id,
            ];
    }
    /**
     * @test
     * 
     */
    public function reviewView()
    {
        $this->actingAs($this->user);

        $response = $this->get(route('review.index'), $this->data);
        $response->assertViewIs('review');
    }

    /**
     * @test
     * 
     */
    public function novelView()
    {
        $this->actingAs($this->user);

        $response = $this->get(route('review.show', $this->data));
        $response->assertViewIs('novel');
    }
}
