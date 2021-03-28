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
            route('characters.store'),
            $character
        );

        $response->assertStatus(201);

        $response->assertJson($character);

        $this->assertDatabaseHas('characters', $character);
    }

    public function testItCanUpdateCharacters()
    {
        $character = Character::factory()->create()->toArray();

        $data = Character::factory()->make(['id' => $character['id']])->toArray();

        $response = $this->putJson(
            route('characters.update', $character['id']),
            $data
        );

        $response->assertStatus(204);

        $this->assertDatabaseHas('characters', $data);
    }

    public function testItCanDeleteCharacters()
    {
        $character = Character::factory()->create()->toArray();

        $response = $this->deleteJson(
            route('characters.destroy', $character['id'])
        );

        $response->assertStatus(204);

        $this->assertDatabaseMissing('characters', $character);
    }
}
