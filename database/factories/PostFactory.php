<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tekst'=>$this->faker->text($maxNbChars=100),
            'datum'=>$this->faker->date($format='Y-m-d', $max='now'),
            'clan_id'=>$this->faker->numberBetween($min=1, $max=60),
        ];
    }
}
