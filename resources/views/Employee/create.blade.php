@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro Empleado</h2>



    <form action="{{ route('employee.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col">
            <label>nombres</label>
            <input type="text" name="nombres">
        </div>
        <div class="col">
            <label>apellidos</label>
            <input type="text" name="apellidos">
        </div>
        <div class="col">
            <label>telefono</label>
            <input type="number" name="telefono">
        </div>
        <div class="col">
            <label>direccion</label>
            <input type="text" name="direccion">
        </div>
        <div class="col">
            <label>fecha de nacimiento</label>
            <input type="date" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
        </div>
        <div class="col">
            <label>salario</label>
            <input type="number" name="salario">
        </div>
        <div class="col">
            <label>hora de inicio</label>
            <input type="time" name="hora_inicio">
        </div>
        <div class="col">
            <label>hora de salida</label>
            <input type="time" name="hora_salida">
        </div>
                <input type="submit" name="btn_enviar" value="Registrar">
    </form>
@endsection
