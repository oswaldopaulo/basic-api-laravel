<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAddress>
 */
class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first(),
            'postcode' => fake()->postcode(),
            'street' => fake()->streetName(),
            'number'=>fake()->buildingNumber(),
            'city'=>fake()->city(),
            'country'=>fake()->country(),
        ];
    }
}
