<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Material;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    protected $model = Material::class;

    public function definition()
    {
        return [
            'unidadMedida' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
            'ubicacion' => $this->faker->address,
            'categoria' => Categoria::factory(),
                  ];
    }
}
