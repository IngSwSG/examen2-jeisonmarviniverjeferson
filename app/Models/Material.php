<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = 'materiales';

    protected $primaryKey = 'codigo';

    protected $fillable = [
        'unidadMedida',
        'descripcion',
        'ubicacion',
        'categoria',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria', 'idCategoria');
    }

    public function itemsRequisicion()
    {
        return $this->hasMany(ItemRequisicion::class, 'material', 'codigo');
    }

    public function materialUnidades()
    {
        return $this->hasMany(MaterialUnidad::class, 'material', 'codigo');
    }
}
