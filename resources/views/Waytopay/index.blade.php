@extends('Template.Template')
@section('plantillaweb')
    <h2>Listado de formas de pago</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($waytopays as $waytopay)
                <tr>
                    <th scope="row">{{ $waytopay->id }}</th>
                    <td>{{ $waytopay->nombre }}</td>
                    <td>{{ $waytopay->descrpcion }}</td>

            @endforeach
        </tbody>
    </table>
    {{ $waytopays->links() }}
@endsection
