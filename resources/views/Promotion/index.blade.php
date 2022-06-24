@extends('Template.Template')
@section('plantillaweb')
    <h2>Lista de promociones</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($promotions as $promotion)
                <tr>
                    <th scope="row">{{ $promotion->id }}</th>
                    <td>{{ $promotion->nombres }}</td>
                    <td>{{ $promotion->descripcion }}</td>
                    <td>{{ $promotion->precio }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('promotion.edit', $promotion) }}" role="button">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('promotion.destroy',$promotion)}}" method="POST">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $promotions->links() }}
@endsection
