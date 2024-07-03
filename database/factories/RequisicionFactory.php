<?php

namespace Database\Factories;

use App\Models\Requisicion;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class RequisicionFactory extends Factory
{
    protected $model = Requisicion::class;

    public function definition()
    {
        return [
            'fecha' => $this->faker->dateTime,
            'estado' => $this->faker->word,
            'usuario' => Usuario::factory(),
        ];
    }
}
