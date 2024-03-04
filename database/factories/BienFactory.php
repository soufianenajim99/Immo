<?php

namespace Database\Factories;

use App\Models\client;
use App\Models\prop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\bien>
 */
class BienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre'=>$this->faker->word(),
            'adresse'=>$this->faker->address(),
            'picture'=>$this->faker->word(),
            'type'=>$this->faker->randomElement(['allocation', 'vente']),
            'description'=>$this->faker->sentence(),
            'client_id'=>client::factory()->create(),
            'prop_id'=>prop::factory()->create(),

            
        ];
    }
}