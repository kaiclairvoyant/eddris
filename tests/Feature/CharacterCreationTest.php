<?php

namespace Tests\Feature;

use App\Models\Character;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CharacterCreationTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function testItCanCreateCharacters()
    {
        $character = Character::factory()->create()->toArray();

        $response = $this->post(
            '/characters',
            $character
        );

        $response->assertStatus(201);
    }
}
