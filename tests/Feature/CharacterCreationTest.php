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
        $character = Character::factory();
        $response = $this->post(
            '/characters',
            [
                'player_id' => $this->faker->uuid,
                'character_id' => $this->faker->uuid,
                'name' => $this->faker->name,
                'health' => $this->faker->randomNumber(3),
                'mana' => $this->faker->randomNumber(3),
                'stamina' => $this->faker->randomNumber(3),
                'strength' => $this->faker->randomNumber(2),
                'intelligence' => $this->faker->randomNumber(2),
                'dexterity' => $this->faker->randomNumber(2),
                'endurance' => $this->faker->randomNumber(2),
                'resistance' => $this->faker->randomNumber(2),
            ]
        );

        $response->assertStatus(201);
        $response->assertStatus(200);
    }
}
