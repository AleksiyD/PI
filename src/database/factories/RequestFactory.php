<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RequestFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'request' => $this->faker->realText(),
            'comment' => $this->faker->realText(),
            'wish' => $this->faker->realText()
        ];
    }
}
