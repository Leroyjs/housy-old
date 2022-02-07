<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PortfolioFactory extends Factory
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
//            'build_date' =>$this->faker->date,
            'about' =>$this->faker->text(),
            'description' =>$this->faker->text(),

        ];
    }
}
