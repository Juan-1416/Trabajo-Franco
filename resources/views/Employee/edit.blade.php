@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario Editar</h2>



    <form action="{{ route('employee.update', $employee) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col">
            <label>nombres</label>
            <input type="text" name="nombres" value="{{$employee->nombres}}">
        </div>
        <div class="col">
            <label>apellidos</label>
            <input type="text" name="apellidos" value="{{$employee->apellidos}}">
        </div>
        <div class="col">
            <label>telefono</label>
            <input type="number" name="telefono" value="{{$employee->telefono}}">
        </div>
        <div class="col">
            <label>direccion</label>
            <input type="text" name="direccion" value="{{$employee->direccion}}">
        </div>
        <div class="col">
            <label>fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento"value="{{$employee->fecha_nacimiento}}">
        </div>
        <div class="col">
            <label>salario</label>
            <input type="number" name="salario" value="{{$employee->salario}}">
        </div>
        <div class="col">
            <label>hora de inicio</label>
            <input type="time" name="hora_inicio" value="{{$employee->hora_inicio}}">
        </div>
        <div class="col">
            <label>hora de salida</label>
            <input type="time" name="hora_salida" value="{{$employee->hora_salida}}">
        </div>
                <input type="submit" name="btn_enviar" value="Actualizar">
    </form>
@endsection
