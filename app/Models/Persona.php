<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'SE_PERSONAS';
    protected $primaryKey = 'ID_Persona';
    public $timestamps = false;
    protected $fillable = [
        'TX_PrimerNombre',
        'TX_SegundoNombre',
        'TX_PrimerApellido',
        'TX_SegundoApellido',
        'DT_FechaNacimiento',
        'TX_Email',
        'TX_TelefonoCelular',
        'TX_TelefonoOficina',
        'TX_TelefonoLocalHabitacion',
        'FK_TipoDocumento',
        'TX_NumeroDocumento',
        'TX_NumeroSeguroSocial',
        'FK_Genero',
        'FK_LocalidadCasa',
        'FK_ZonaCasa',
        'FK_Edo_Civil',
        'FK_GradoEstudio',
        'TX_Profesion',
        'TX_DireccionCasa',
        'FK_LocalidadTrabajo',
        'TX_DireccionTrabajo',
        'BO_Activo',
        'BO_LeeVsEscribe',
        'TX_NombreImagen',
        'Comision',
        'BO_Empleado',
        'TX_LugarNacimiento',
        'TX_Religion',
        'LocalidadCasaID_Localidad',
        'LocalidadTrabajoID_Localidad',
        'FK_Colegio'
    ];
}
