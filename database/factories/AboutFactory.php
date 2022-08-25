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
            
            'nama' => $this->faker->firstName()
        ];
    }
}
