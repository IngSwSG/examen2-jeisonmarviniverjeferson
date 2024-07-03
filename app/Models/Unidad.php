<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $table = 'unidades';

    protected $primaryKey = 'idUnidad';

    protected $fillable = [
        'nombre',
    ];

    public function materialesUnidades()
    {
        return $this->hasMany(MaterialUnidad::class, 'unidad', 'idUnidad');
    }

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'unidad', 'idUnidad');
    }

    public function presupuestos()
    {
        return $this->hasMany(Presupuesto::class, 'unidad', 'idUnidad');
    }
}
