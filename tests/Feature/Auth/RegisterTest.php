<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;

class RegisterTest extends TestCase
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
    public function registerView()
    {
        $response = $this->get(route('register'));

        $response->assertSuccessful()
            ->assertViewIs('auth.register');
    }

    /**
     * @test
     * 
     */
    public function register_success()
    {
        $response = $this->post(route('register'), [
            'name' => 'testUser',
            'email' => 'test@example.com',
            'password' => 'testexample12',
        ]);

        $response->assertRedirect('home');
    }

    /**
     * @test
     * 
     */
    public function nameNotEntered()
    {
        $response = $this->from('register')
            ->post(route('register'), [
                'name' => '', // Not entered 
                'email' => 'test@example.com',
                'password' => 'testexample12',
            ]);

        $response->assertRedirect('register');
    }

    /**
     * @test
     * 
     */
    public function textCountOver_Name()
    {
        $response = $this->from('register')
            ->post(route('register'), [
                'name' => 'testUsertestUser', //Over Entered
                'email' => 'test@example.com',
                'password' => 'testexample12',
            ]);

        $response->assertRedirect('register');
    }

    /**
     * @test
     * 
     */
    public function passNotEntered()
    {
        $response = $this->from('register')
            ->post(route('register'), [
                'name' => 'testUser',
                'email' => '', // Not entered
                'password' => 'testexample12',
            ]);

        $response->assertRedirect('register');
    }

    /**
     * @test
     * 
     */
    public function shortPassword()
    {
        $response = $this->from('register')
            ->post(route('register'), [
                'name' => 'testUsertestUser',
                'email' => 'test@example.com',
                'password' => 'testexa', // 7 characters
            ]);

        $response->assertRedirect('register');
    }

    /**
     * @test
     * 
     */

    /*public function deactive()
    {
        $this->withoutExceptionHandling();

        $this->actingAs($this->user);

        $response = $this->from('deactive')
            ->post(route('deactive.exe'));

        $response->assertDeleted($this->user);
    }*/
}
