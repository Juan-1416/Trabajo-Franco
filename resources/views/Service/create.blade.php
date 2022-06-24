@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro De Servicios</h2>



    <form action="{{ route('service.store') }}" method="post">
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
            <label>Tiempo_maximo</label>
            <input type="time" name="tiempo_maximo">
        </div>
        <div class="col">
            <label>Costo_extra</label>
            <input type="number" name="costo_extra">
        </div>
        <div class="col">
            <label>Clave</label>
            <input type="number" name="clave">
        </div>
        <div class="col">
            <label for="cars">Promocion</label>
            <select id="cars" name="promotion_id">
                <option selected="true" disabled="disabled">promocion</option>
                @foreach ($promotions as $promotion)
                    <option value="{{ $promotion->id }}">{{ $promotion->nombres }}</option>
                @endforeach

            </select>
        </div>
                <input type="submit" name="btn_enviar" value="Registrar">
    </form>
@endsection
