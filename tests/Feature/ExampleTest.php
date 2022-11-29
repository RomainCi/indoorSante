<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Formulaire;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_path_formulaire_post(): void
    {
        $response = $this->post('/api/formulaire', [
            "lastname" => 'Doe',
            "firstname" => 'John',
            "email" => 'john@gmail.com',
            "phone" => "0000000000",
            'content' => "bonjour indoor santé",
            'check' => true
        ]);
        $response->assertStatus(200);
    }

    public function test_store_bdd(): void
    {
        Formulaire::factory()->create();
        $this->assertCount(1,User::all());
        $this->assertCount(1,Formulaire::all());
    }
}
