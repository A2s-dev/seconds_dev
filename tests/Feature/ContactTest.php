<?php

namespace Tests\Feature;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * 
     */
    function SentApproved()
    {
        $this->withoutExceptionHandling();

        Mail::fake();

        $contact = Contact::factory()->create();

        $response = $this->post(route('contact.store', ['name' => $contact->name, 'email' => $contact->email, 'message' => $contact->message]));
        $response->assertRedirect(route('contact.index'));

        Mail::assertSent(ContactMail::class, 1);

        Mail::assertNotQueued(ContactMail::class);
    }
}
