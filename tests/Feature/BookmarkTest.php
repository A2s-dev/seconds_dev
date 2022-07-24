<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Post;
use App\Models\User;
use App\Models\Bookmark;

class BookmarkTest extends TestCase
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
    public function bookmarkView()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->get(route('myBook'));

        $response->assertViewIs('bookmark');
    }

    /**
     * @test
     *
     */
    public function bookmark_save()
    {
        $this->withoutExceptionHandling();

        $response = $this->actingAs($this->user)
            ->get(route('bookmark', $this->post->id));

        $response->assertRedirect();
    }

    /**
     * @test
     *
     */
    public function bookmark_delete()
    {
        $this->withoutExceptionHandling();

        $bookmark = Bookmark::factory()->create([
            'user_id' => $this->user->id,
            'post_id' => $this->post->id
        ]);

        $response = $this->actingAs($this->user)
            ->get(route('unBookmark', $this->post->id), [$bookmark]);

        $response->assertRedirect();
    }
}
