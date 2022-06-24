<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::simplePaginate(2);
        return view('Employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee;
        $employee->nombres = $request->nombres;
        $employee->apellidos = $request->apellidos;
        $employee->telefono = $request->telefono;
        $employee->direccion = $request->direccion;
        $employee->fecha_nacimiento = $request->fecha_nacimiento;
        $employee->salario = $request->salario;
        $employee->hora_inicio = $request->hora_inicio;
        $employee->hora_salida = $request->hora_salida;
        $employee->save();
        return redirect()->route('employee.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        return view('Employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->nombres = $request->nombres;
        $employee->apellidos = $request->apellidos;
        $employee->telefono = $request->telefono;
        $employee->direccion = $request->direccion;
        $employee->fecha_nacimiento = $request->fecha_nacimiento;
        $employee->salario = $request->salario;
        $employee->hora_inicio = $request->hora_inicio;
        $employee->hora_salida = $request->hora_salida;
        $employee->save();
        return redirect()->route('employee.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employee.index');
    }
}
