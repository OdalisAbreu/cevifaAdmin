<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoriasMedicas extends Model
{
    protected $table = 'SE_HISTORIAS_MEDICAS';
    protected $primaryKey = 'ID_HistoriaMedica';
    public $timestamps = false;
}
