<?php

declare(strict_types=1);

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\API\HelloWorldController;
use App\Http\Controllers\Guest\WelcomeController;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get(action(WelcomeController::class));

        $response->assertStatus(200);
    }

    public function test_api_hello_world_returns_expected_json(): void
    {
        $response = $this->get(action(HelloWorldController::class));

        $response->assertStatus(200)->assertJson(['message' => 'Hello, World!']);
    }
}
