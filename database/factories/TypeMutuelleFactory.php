<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Type_mutuelle>
 */
class TypeMutuelleFactory extends Factory
{
    
    public function definition(): array
    {
        return [
            "type" => array_rand(["Santé", "retraite-Décès", "Agricole", "Mixte"], 1)

        ];
    }
}
