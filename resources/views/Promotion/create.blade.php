@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro De Promociones</h2>



    <form action="{{ route('promotion.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col">
            <label>Nombres</label>
            <input type="text" name="nombres">
        </div>
        <div class="col">
            <label>Descripcion</label>
            <input type="text" name="descripcion">
        </div>
        <div class="col">
            <label>Precio</label>
            <input type="number" name="precio">
        </div>
                <input type="submit" name="btn_enviar" value="Registrar">
    </form>
@endsection
