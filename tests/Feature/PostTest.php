<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->post = Post::factory()->create();

        $this->data =
            [
                'edit_id' => $this->post->id,
                'edit_title' => $this->post->title,
                'edit_content' => $this->post->content,
            ];
    }
    /**
     * @test
     * 
     */
    public function editerView()
    {
        $this->actingAs($this->user);

        $response = $this->get(route('post.index'), [
            'name' => $this->user->name,
            'posts' => $this->post,
        ]);
        $response->assertViewIs('editer');
    }

    /**
     * @test
     * 
     */
    public function addPost()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->get(route('post.add'));

        $response->assertRedirect(route('post.index'));
    }

    /**
     * @test
     * 
     */
    public function updatePost()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->from(route('post.index'), ['post' => $this->post])
            ->post(route('post.update'), $this->data);

        $response->assertRedirect(route('post.index'));
    }

    /**
     * @test
     * 
     */
    public function deletePost()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->from(route('post.index'))
            ->post(route('post.delete'), $this->data);

        $response->assertRedirect(route('post.index'));
    }
}
