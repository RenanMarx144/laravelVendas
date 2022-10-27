<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $price =  $this->faker->randomFloat(2 , 10 , 100);
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->text(30),
            'value' => $price,
        ];
    }
}
