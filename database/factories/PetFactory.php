<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition() {
			return [
				'name' => $this->faker->name,
				'age' => $this->faker->numberBetween(1,10),
				'sex' => $this->faker->numberBetween(1,2),
				'short_description' => $this->faker->text,
				'description' => $this->faker->text,
				'type' => $this->faker->randomElement(['dog', 'cat'])
			];
    }
}
