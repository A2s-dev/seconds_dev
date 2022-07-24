<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Tests\TestCase;

class PDFTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create();
        $this->post = Post::factory()->create([
            'status' => 1
        ]);
    }

    /**
     * @test
     * 
     */
    public function pdfExport()
    {
        $this->withoutExceptionHandling();

        $status = Crypt::encrypt($this->post->status);

        $response = $this->actingAs($this->user)
            ->get(route('pdf.export', ['post_id' => $this->post->id, 'status' => $status]));

        $response->assertOk();
    }
}
