<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'sexe' => array_rand(["H", "F"], 1),
            'telephone1' => $this->faker->unique()->phoneNumber,
            'telephone2' => $this->faker->unique()->phoneNumber,
            'pieceIdentite' => array_rand(["CNI", "PASSPORT", "PERMIS DE CONDUIRE"], 1),
            'numeroPieceIdentite' => $this->faker->unique()->bankAccountNumber,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'service' => $this->faker->domainName,
            'photo' => $this->faker->imageUrl(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
