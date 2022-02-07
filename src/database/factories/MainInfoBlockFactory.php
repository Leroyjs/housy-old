<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MainInfoBlockFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'info' =>$this->faker->text(),
            'url_text' => $this->faker->url(),
            'url' => $this->faker->url(),
        ];
    }
}
