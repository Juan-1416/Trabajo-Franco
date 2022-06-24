<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Quote;
use App\Models\Waytopay;
use App\Models\Service;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quotes = Quote::simplePaginate(2);
        return view('Quote.index', compact('quotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //permite ver el formulario
    public function create()
    {
        $employees = Employee::All();
        $waytopays = Waytopay::All();
        $services = Service::All();
        return view('Quote.create', compact('employees', 'waytopays', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quote = new Quote;
        $quote->hora_programada = $request->hora_programada;
        $quote->hora_inicio = $request->hora_inicio;
        $quote->hora_fin = $request->hora_fin;
        $quote->tiempo_total = $request->tiempo_total;
        $quote->total_pago = $request->total_pago;
        $quote->employee_id = $request->employee_id;
        $quote->waytopay_id = $request->waytopay_id;
        $quote->service_id = $request->service_id;
        $quote->save();
        return redirect()->route('quote.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
