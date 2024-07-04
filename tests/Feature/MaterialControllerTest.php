<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Material;
use App\Models\Categoria;


class MaterialControllerTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function dado_un_materia_que_no_existe_insertar_material()
    {
        $categoria = Categoria::factory()->create();

        $response = $this->post('/Insertar', [
            'unidadMedida' => 'metros',
            'descripcion' => 'Material de prueba',
            'ubicacion' => 'Almacén A',
            'categoria' => $categoria->idCategoria,
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('materiales', [
            'unidadMedida' => 'metros',
            'descripcion' => 'Material de prueba',
            'ubicacion' => 'Almacén A',
            'categoria' => $categoria->idCategoria,
        ]);
    }

    //Otros metodos de prueba sugeridos:
    // - Prueba de Validación de Campos Requeridos
    // - Prueba de Validación de Categoría Inexistente


}
