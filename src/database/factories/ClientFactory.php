<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'full_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'email_verified' => array_rand([true, false]),
            'address' => $this->faker->address(),
            'phone' => $this->faker->numerify('##########'),
            'created_at' => $this->faker->dateTime('now')
        ];
    }
}
