<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThingFactory extends Factory
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
            'organization_id' => Organization::factory(),
            'name' => $this->faker->name,
            'category' => $this->faker->randomElement($array = array ('product','place','person','website','business','object','concept')),
            'description' => $this->faker->text,
        ];
    }
}
