<?php

namespace Database\Factories;

use App\Models\Character;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacterFactory extends Factory
{
    protected $model = Character::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'health' => $this->faker->randomNumber(3),
            'mana' => $this->faker->randomNumber(3),
            'stamina' => $this->faker->randomNumber(3),
            'strength' => $this->faker->randomNumber(2),
            'intelligence' => $this->faker->randomNumber(2),
            'dexterity' => $this->faker->randomNumber(2),
        ];
    }
}
