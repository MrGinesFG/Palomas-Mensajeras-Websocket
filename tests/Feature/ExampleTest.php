<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');
        $response->assertRedirect('/emisor');

        $emisor = $this->get('/emisor');
        $emisor->assertStatus(200);

        $receptor = $this->get('/receptor');
        $receptor->assertStatus(200);
    }

    public function test_emitir_dispatches_with_sender_name(): void
    {
        $response = $this->post('/emitir', [
            'newText' => 'Hola clase desde la paloma',
            'newStyle' => 'background: #333;',
            'pigeonType' => 'golden',
            'senderName' => 'Lucas',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('ok');
    }
}
