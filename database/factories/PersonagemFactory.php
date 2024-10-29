<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personagem>
 */
class PersonagemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => fake()->name(),
            'idade' => fake()->numberBetween(10, 20),
            'raca' => fake()->name(),
            'nivel_de_ki' => fake()->numberBetween(10, 100),
        ];
    }
}
