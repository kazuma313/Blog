<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SocialMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'about_id' => rand(1, 3),
            'social_media' => $this->faker->word(1),
            'link' => $this->faker->sentence(1)
        ];
    }
}
