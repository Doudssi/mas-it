<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Beneficiaire>
 */
class BeneficiaireFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nbAdh_F" =>$this->faker->numberBetween(100,150),
            "nbAdh_H" =>$this->faker->numberBetween(60,200),
            "nbAdhAj_F" =>$this->faker->numberBetween(20,70),
            "nbAdhAj_H" =>$this->faker->numberBetween(15,70),
            "nbBen_F" =>$this->faker->numberBetween(200,500),
            "nbBen_H" =>$this->faker->numberBetween(100,300),
            "nbBenAj_F" =>$this->faker->numberBetween(60,80),
            "nbBenAj_H" =>$this->faker->numberBetween(50,90),
            "mutuelle_id" => rand(1,10),
        ];
    }
}
