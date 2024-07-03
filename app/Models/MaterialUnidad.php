<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialUnidad extends Model
{
    use HasFactory;

    protected $table = 'material_unidades';
    protected $primaryKey = 'idMaterialUnidad';

    protected $fillable = [
        'cantidad',
        'idUnidad',
        'idMaterial',
    ];

    public function material()
    {
        return $this->belongsTo(Material::class, 'idMaterial', 'codigo');
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class, 'idUnidad', 'idUnidad');
    }
}
