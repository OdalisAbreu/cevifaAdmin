<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Cita;
use App\Models\HistoriasMedicas;
use App\Models\Payment;
use App\Models\Persona;
use App\Models\Profecional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storage(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($value)
    {
        $persona = Persona::where('TX_NumeroDocumento', $value)->first();
        //valida si la persona existe
        if (!$persona) {
            $Historia = HistoriasMedicas::join('SE_PACIENTES', 'FK_Paciente', '=', 'ID_Paciente')->where('TX_CodigoInternoHistoria', $value)->first();
            $persona = Persona::find($Historia->FK_Persona);
        }
        $cita = DB::table('SE_RELACION_PERSONAS_CITAS')
            ->join('SE_CITAS', 'SE_RELACION_PERSONAS_CITAS.FK_Cita', '=', 'SE_CITAS.ID_Cita')
            ->where('FK_Persona', $persona->ID_Persona)
            ->where('DT_FechaDesdeCita', '>=', now()->format('Y-m-d'))
            ->first();
        //valida si la persona tiene una cita
        if (!$cita) {
            return [
                'cita' => null,
                'persona' => $persona,
                'profecional' => null
            ];
        }
        $profecional = Profecional::join('SE_PERSONAS', 'FK_Persona', '=', 'ID_Persona')->where('ID_Profesional', $cita->FK_Profesional)->first();

        return [
            'cita' => $cita,
            'persona' => $persona,
            'profecional' => $profecional
        ];
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cita $cita)
    {
        //
    }
}
