<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requisicion extends Model
{
    use HasFactory;

    protected $table = 'requisiciones';
    protected $primaryKey = 'idRequisicion';

    protected $fillable = [
        'fecha',
        'estado',
        'usuario',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario', 'idUsuario');
    }

    public function itemsRequisicion()
    {
        return $this->hasMany(ItemRequisicion::class, 'idRequisicion', 'idRequisicion');
    }
}
