<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Material;
use app\Http\Controllers\Controller;
class ApiController extends Controller
{
    public function Insertar(Request $request)
    {
        $request->validate([
            'unidadMedida' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,idCategoria',
        ]);

        $material = Material::create([
            'unidadMedida' => $request->input('unidadMedida'),
            'descripcion' => $request->input('descripcion'),
            'ubicacion' => $request->input('ubicacion'),
            'categoria' => $request->input('categoria'),
        ]);

        return response()->json($material, 201);
    }

    public function Actualizar(Request $request, $id)
{
    try {
        $request->validate([
            'unidadMedida' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,idCategoria',
        ]);

        $material = Material::findOrFail($id);

        $material->fill([
            'unidadMedida' => $request->input('unidadMedida'),
            'descripcion' => $request->input('descripcion'),
            'ubicacion' => $request->input('ubicacion'),
            'categoria' => $request->input('categoria'),
        ]);

        $material->save();

        return response()->json(['message' => 'Material actualizado exitosamente', 'material' => $material], 200);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Error al actualizar el material: ' . $e->getMessage()], 500);
    }
}
    public function ObtenerMateriales()
    {
        $materiales = Material::all();

        return response()->json($materiales);
    }
}
