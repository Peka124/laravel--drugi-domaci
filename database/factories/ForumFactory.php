<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Forum>
 */
class ForumFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'url'=>$this->faker->unique()->url(),
            'email'=>$this->faker->unique()->safeEmail(),
            'instagram'=>$this->faker->unique()->domainWord(),
            'osnivac'=>$this->faker->name()
        ];
    }
}
