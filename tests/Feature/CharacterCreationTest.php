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
        $character = Character::factory()->make()->toArray();

        $response = $this->postJson(
            '/api/characters',
            $character
        );

        $response->assertStatus(201);

        $response->assertJson($character);
    }

    public function testItCanUpdateCharacters()
    {
        $character = Character::factory()->create()->toArray();

        $data = Character::factory()->make(['id' => $character['id']])->toArray();

        $response = $this->putJson(
            '/api/characters',
            $data
        );
dd($response->getOriginalContent()['message']);
        $response->assertStatus(201);

        $response->assertJson($character);
    }
}
