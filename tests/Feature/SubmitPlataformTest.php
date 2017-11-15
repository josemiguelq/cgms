<?php

namespace Tests\Feature;

use Illuminate\Validation\ValidationException;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubmitPlataformTest extends TestCase
{
	    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    /** @test */
    function guest_can_submit_a_new_plataform()
    {
        $response = $this->post('/plataform/create', [
            'name' => 'Example Title',
            'lat' => 'http://example.com',
            'long' => 'http://example.com',
            'vacancy' => 'fa',
        ]);

        $this->assertDatabaseHas('plataforms', [
            'name' => 'Example Title'
        ]);

        $response
            ->assertStatus(200);
        
    }
}
