<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificacion extends Model
{
    use HasFactory;

    protected $fillable = [
        'unidad_negocio_cer',
        'gerencia_cer',
        'cedula_cer',
        'nombre_cer',
        'curso_cer',
        'certificacion_tecnica_cer',
        'certificacion_del_mes_cer',
        'fecha_de_inicio_cer',
        'fecha_de_fin_cer',
        'total_horas_cer',
        'lugar_curso_cer',
        'area_partner_cer',
        'metodologia_cer',
        'tipo_curso_cer',
        'nota_cer',
        'asistencia_cer',
        'satisfacion_cer',
        'estado_cer',
        'mes_finalizacion_cer',
        'anio_cierre_cer',
        'pago_cer',
        'costo_curso_cer',
        'costo_curso_empresa_cer',
        'documento_curso_cer',
    ];
}
