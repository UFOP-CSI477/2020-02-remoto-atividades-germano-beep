<?php

namespace Database\Factories;

use App\Models\Registro;
use App\Models\Pessoa;
use App\Models\Unidade;
use App\Models\Vacina;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array    
     */
    public function definition()
    {
        return [
            'pessoa_id' => Pessoa::factory(),
            'unidade_id' => Unidade::factory(),
            'vacina_id' => Vacina::factory(),
            'dose'=> $this->faker->numberBetween(0,1,2),
            'data'=> $this->faker->dateTimeThisYear(),


        ];
    }
}
