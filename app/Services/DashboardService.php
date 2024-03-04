<?php

namespace App\Services;

use App\Models\Payment;

class   DashboardService
{
    public function __construct()
    {
    }

    function getDataPymentByDate($dateFrom, $dateTo)
    {
        $payment = Payment::leftJoin('payment_response_code', 'payment_response_code.code', '=', 'payments.response_code')
            ->join('SE_PERSONAS AS P', 'P.ID_Persona', '=', 'payments.persona_id')
            ->join('SE_CITAS AS C', 'C.ID_Cita', '=', 'payments.cita_id')
            ->join('SE_PROFESIONALES AS PF', 'PF.ID_Profesional', '=', 'C.FK_Profesional')
            ->join('SE_PERSONAS AS PFP', 'PFP.ID_Persona', '=', 'PF.FK_Persona')
            ->leftJoin('payment_response_code AS PRC', 'PRC.code', '=', 'payments.response_code')
            ->select(
                'payments.amount',
                'payments.response_code',
                'payments.transaction_id',
                'payments.remote_response_code',
                'payments.authorization_code',
                'payments.tx_token',
                'payments.status',
                'payments.retrival_reference_number',
                'payments.payment_date',
                'PRC.code',
                'PRC.description',
                'P.TX_PrimerNombre',
                'P.TX_SegundoNombre',
                'P.TX_PrimerApellido',
                'P.TX_SegundoApellido',
                'P.TX_Email',
                'P.TX_TelefonoCelular',
                'P.TX_TelefonoLocalHabitacion',
                'P.FK_Genero',
                'C.DT_FechaDesdeCita',
                'C.DT_FechaHastaCita',
                'PFP.TX_PrimerNombre AS ProfecinalPrimerNombre',
                'PFP.TX_SegundoNombre AS ProfecinalSegundoNombre',
                'PFP.TX_PrimerApellido  AS ProfecinalPrimerApellido',
                'PFP.TX_SegundoApellido AS ProfecinalSegundoApellido',
                'PFP.TX_Email AS ProfecinalEmail',
                'PFP.TX_TelefonoCelular AS ProfecinalTelefonoCelular',
                'PFP.FK_Genero  AS ProfecinalGenero',
            )
            ->where('payments.created_at', '>=', $dateFrom)
            ->where('payments.created_at', '<=', $dateTo)
            ->get();

        return $payment;
    }
}
