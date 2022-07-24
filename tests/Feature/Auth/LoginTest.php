<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->user = User::factory()->create([
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);
    }
    /**
     * @test
     */
    public function loginView()
    {
        $response = $this->get(route('login'));
        $response->assertSuccessful()
            ->assertViewIs('auth.login');

        $this->assertGuest();
    }

    /**
     * @test
     * 
     */
    public function login_success()
    {
        $response = $this->from('login')
            ->post('login', [
                'email' => $this->user->email,
                'password' => 'password'
            ]);

        $this->assertTrue(Auth::check());

        $response->assertStatus(302)->assertRedirect('/home');
    }

    /**
     * @test
     * 
     */
    public function emailNotEntered()
    {
        $response = $this->from('login')
            ->post('login', [
                'email' => '',
                'password' => 'password'
            ]);

        $this->assertGuest();

        $response->assertStatus(302)->assertRedirect('login');
    }

    /**
     * @test
     * 
     */
    public function passNotEntered()
    {
        $response = $this->from('login')
            ->post('login', [
                'email' => $this->user->email,
                'password' => ''
            ]);

        $this->assertGuest();

        $response->assertStatus(302)->assertRedirect('login');
    }

    /**
     * @test
     * 
     */
    public function passwordMismatch()
    {
        $response = $this->from('login')
            ->post('login', [
                'email' => $this->user->email,
                'password' => 'PassWord'
            ]);

        $this->assertGuest();

        $response->assertStatus(302)->assertRedirect('login');
    }

    public function Logout()
    {
        $this->actingAs($this->user);

        $this->post('logout');
        $this->assertGuest();
    }
}
