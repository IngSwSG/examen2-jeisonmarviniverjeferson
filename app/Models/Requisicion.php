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



}
