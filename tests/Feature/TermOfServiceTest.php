<?php

namespace Tests\Feature;

use Tests\TestCase;

class TermOfServiceTest extends TestCase
{
    /**
     * @test
     * 
     */
    public function termsView()
    {
        $response = $this->get(route('terms'));
        $response->assertViewIs('terms');
    }
}
