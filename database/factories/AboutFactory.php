<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
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
            'isi' => $this->faker->paragraph(10, true),
            'user_id' => rand(1,3)
            // 'nama' => $this->faker->firstName()
        ];
    }
}
