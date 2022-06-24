@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario de pago</h2>



    <form action="{{ route('waytopay.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col">
            <label>nombre</label>
            <input type="text" name="nombre">
        </div>
        <div class="col">
            <label>descripcion</label>
            <input type="text" name="descripcion">
        </div>
    <input type="submit" name="btn_enviar" value="Registrar">
    </form>
@endsection
