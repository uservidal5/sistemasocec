<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_col',
        'apellido_col',
        'cedula_col',
        'cargo_col',
        'fecha_ingreso_col',
        'celular_col',
        'direccion_col',
    ];
}
