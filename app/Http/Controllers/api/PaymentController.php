<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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
        $payment->amount = floatval($request->monto);
        $payment->save();

        return $payment;
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
