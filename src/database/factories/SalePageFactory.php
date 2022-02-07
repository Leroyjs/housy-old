<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SalePageFactory extends Factory
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
        ];
    }
}
