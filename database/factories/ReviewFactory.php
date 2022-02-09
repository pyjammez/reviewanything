<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Thing;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'thing_id' => Thing::factory(),
            'title' => $this->faker->sentence(5, true),
            'description' => $this->faker->text(),
            'rating' => $this->faker->numberBetween(0,100),
        ];
    }
}
