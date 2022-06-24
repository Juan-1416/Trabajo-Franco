<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::simplePaginate(10);
        return view('Service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $promotions = Promotion::All();
        return view('Service.create', compact('promotions'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service= new Service;
        $service->nombres = $request->nombres;
        $service->descripcion = $request->descripcion;
        $service->tiempo_maximo = $request->tiempo_maximo;
        $service->costo_extra = $request->costo_extra;
        $service->clave = $request->clave;
        $service->promotions_id = $request->promotion_id;
        $service->save();
        return redirect()->route('service.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('Service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $service->nombres = $request->nombres;
        $service->descripcion = $request->descripcion;
        $service->tiempo_maximo = $request->tiempo_maximo;
        $service->costo_extra = $request->costo_extra;
        $service->clave = $request->clave;
        $service->promotions_id = $request->promotions_id;
        $service->save();
        return redirect()->route('service.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index');
    }
}
