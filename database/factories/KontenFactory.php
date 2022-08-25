<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Validation\Rules\Unique;

class KontenFactory extends Factory
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
            'judul' => $this->faker->word(1),
            'about_id' => rand(1,3),
            'slug' => $this->faker->unique()->slug(1),
            'excerpt' => $this->faker->sentence(5),
            'isi' => $this->faker->paragraph(10, true)
            

    

        ];
    }
}
