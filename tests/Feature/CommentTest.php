<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;
use Tests\TestCase;

class CommentTest extends TestCase
{

    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->post = Post::factory()->create();
        $this->comment = Comment::factory()->create([
            'user_id' => $this->user->id,
            'post_id' => $this->post->id,
            'message' => 'test',
        ]);
    }

    /**
     *
     * @test
     */
    public function CommentView()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->get(route('comment.index', $this->comment->post_id));

        $response->assertStatus(200);
    }

    /**
     *
     * @test
     */
    public function storeComment()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->post(route('comment.store', ['user_id' => $this->comment->user_id, 'post_id' => $this->comment->post_id, 'message' => $this->comment->message]));

        $response->assertRedirect();
    }
}
