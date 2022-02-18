<?php

namespace Database\Factories;

use App\Enums\CustomerRole;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'role' => collect(CustomerRole::cases())->random()->value,
            'password' => Hash::make('password'),
            'remember_token' => str()->random(10),
        ];
    }
}
