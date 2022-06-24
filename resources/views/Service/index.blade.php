@extends('Template.Template')
@section('plantillaweb')
    <h2>Lista de servicios</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Tiempo_maximo</th>
                <th scope="col">Costo_extra</th>
                <th scope="col">Clave</th>
                <th scope="col">Promocion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <th scope="row">{{ $service->id }}</th>
                    <td>{{ $service->nombres }}</td>
                    <td>{{ $service->descripcion }}</td>
                    <td>{{ $service->tiempo_maximo }}</td>
                    <td>{{ $service->costo_extra }}</td>
                    <td>{{ $service->clave }}</td>
                    <td>{{ $service->promotions_id }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('service.edit', $service) }}" role="button">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('service.destroy',$service)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $services->links() }}
@endsection
