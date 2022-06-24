@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro De Servicios</h2>



    <form action="{{ route('service.update', $service) }}" method="post">
        @method('PUT')
        {{ csrf_field() }}
        <div class="col">
            <label>Nombres</label>
            <input type="text" name="nombres" value="{{$service->nombres}}">
        </div>
        <div class="col">
            <label>Descripcion</label>
            <input type="text" name="descripcion" value="{{$service->descripcion}}">
        </div>
        <div class="col">
            <label>Tiempo_maximo</label>
            <input type="text" name="tiempo_maximo" value="{{$service->tiempo_maximo}}">
        </div>
        <div class="col">
            <label>Costo_extra</label>
            <input type="number" name="costo_extra" value="{{$service->costo_extra}}">
        </div>
        <div class="col">
            <label>Clave</label>
            <input type="number" name="clave" value="{{$service->clave}}">
        </div>
        <div class="col">
            <label>Promocion</label>
            <input type="number" name="promotions_id" value="{{$service->promotions_id}}">
        </div>
                <input type="submit" name="btn_enviar" value="Actualizar">
    </form>
@endsection
