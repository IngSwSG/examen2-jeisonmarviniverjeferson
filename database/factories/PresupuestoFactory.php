<?php

namespace Database\Factories;

use App\Models\Presupuesto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PresupuestoFactory extends Factory
{
    protected $model = Presupuesto::class;

    public function definition()
    {
        return [
            'nombrePresupuesto' => $this->faker->word,
        ];
    }
}
