<?php

namespace Database\Factories;

use App\Models\MaterialUnidad;
use App\Models\Material;
use App\Models\Unidad;
use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialUnidadFactory extends Factory
{
    protected $model = MaterialUnidad::class;

    public function definition()
    {
        return [
            'cantidad' => $this->faker->numberBetween(1, 100),
            'idUnidad' => Unidad::factory(),
            'idMaterial' => Material::factory(),
        ];
    }
}
