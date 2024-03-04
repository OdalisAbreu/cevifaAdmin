<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        return $request->all();
        $request->validate([
            'cita_id' => 'required',
            'user_id' => 'required',
            'persona_id' => 'required',
            'monto' => 'required',
        ]);
        $payment = new Payment();
        $payment->cita_id = $request->cita_id;
        $payment->user_id = $request->user_id;
        $payment->persona_id = $request->persona_id;
        $payment->amount = $request->monto;
        $payment->save();

        //  return $payment;
    }
}
