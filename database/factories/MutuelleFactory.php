<?php

namespace Database\Factories;

use App\Models\Mutuelle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mutuelle>
 */
class MutuelleFactory extends Factory
{
    protected $model = Mutuelle::class;

    public function definition(): array
    {
        return [
            "nom" =>$this->faker->name,
            "sigle" => $this->faker->lastName,
            "siege" => $this->faker->text($maxNbChars = 50),
            "immUemoa" => $this->faker->swiftBicNumber,
            "dateReconnaissance"=> $this->faker->dateTimeBetween("1980-01-01", "2001-12-30"),
            "statut" => array_rand(["Membre", "Non membre"], 1),
            "fonctionnalite" => array_rand(["Fonctionnelle", "Non fonctionnelle"], 1),
            "telephone1" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "type_mutuelle_id" => rand(1,4)

        ];
    }
}
