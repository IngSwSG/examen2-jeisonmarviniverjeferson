<?php

namespace App\Http\Controllers;
use App\Models\Material;

use Illuminate\Http\Request;

class ControladorApi extends Controller
{
    public function Insertar(Request $request)
    {
        try {
            $unidadMedida = $request->input('unidadMedida');
            $descripcion = $request->input('descripcion');
            $ubicacion = $request->input('ubicacion');
            $categoria = $request->input('categoria');
            
            $material = new material();
            $material->unidadMedida = $unidadMedida; 
            $material->descripcion = $descripcion;
            $material->ubicacion = $ubicacion;
            $material->categoria = $categoria;
            $material->save();

            return response()->json(['message' => 'Materiar insertado con éxito'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error en el servidor: ' . $e->getMessage()], 500);
        }
        
    }


    public function Actualizar(Request $request, $id)
    {
        $request->validate([
            'unidadMedida' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'ubicacion' => 'required|string|max:255',
            'categoria' => 'required|exists:categorias,idCategoria',
        ]);

        $material = Material::findOrFail($id);
        $material->update([
            'unidadMedida' => $request->input('unidadMedida'),
            'descripcion' => $request->input('descripcion'),
            'ubicacion' => $request->input('ubicacion'),
            'categoria' => $request->input('categoria'),
        ]);

        return response()->json($material, 200);
    }
    public function ObtenerMateriales()
    {
        $materiales = Material::all();

        return response()->json($materiales);
    }
}
