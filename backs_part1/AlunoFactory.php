<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                'dtinclus' =>$this->faker-> date('2022-06-14'),
                'nusp'     =>$this->faker->ean8(),
                'nome'     =>$this->faker->name,
                'bloco'    =>$this->faker->randomElement($array = array ('A','B','C','D','E','F','G')),
                'apto'     =>$this->faker->numberBetween($min = 100, $max = 500),
                'quarto'   =>$this->faker->numberBetween($min = 1, $max = 5)
            
        ];
    }
}
