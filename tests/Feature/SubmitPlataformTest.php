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
            'name' => 'Example',
            'lat' => '12.5',
            'long' => '-12',
            'vacancy' => '2',
        ]);

        $this->assertDatabaseHas('plataforms', [
            'name' => 'Example'
        ]);

        $response
            ->assertStatus(200);
        
    }
    /** @test */
    function guest_submit_a_new_plataform_with_nointeger()
    {
        $response = $this->post('/plataform/create', [
            'name' => 'Example',
            'lat' => '12.5',
            'long' => '-12',
            'vacancy' => 'e2',
        ]);

        // $this->assertDatabaseHas('plataforms', [
        //     'name' => 'Example'
        // ]);

        $response
            ->assertStatus(302);
        
    }
}
