<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'SE_CITAS';
    protected $primaryKey = 'ID_Cita';
    const CREATED_AT = 'DT_FechaRegistro';
    const UPDATED_AT = 'DT_FechaUltModif';
    protected $fillable = [
        'FK_Profesional',
        'DT_FechaDesdeCita',
        'DT_FechaHastaCita',
        'FK_SubEspecialidad',
        'TX_Motivo',
        'FK_Area',
        'FK_TipoCita',
        'BO_Reagendado',
        'BO_AtComunitaria',
        'TX_DetalleTipoCita',
        'FK_UsuarioCreador',
        'FK_UsuarioUltModif',
        'TX_Observacion'
    ];
}
