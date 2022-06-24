@extends('Template.Template')
@section('plantillaweb')
    <h2>Formulario ingreso</h2>
    <form action="{{ route('quote.store') }}" name="cita" method="post">
        {{ csrf_field() }}
        <div class="col">
            <label for="">Hora programada: </label>
            <input type="time" name="hora_programada">
        </div>

        <div class="col">
            <label for="">Hora de inicio: </label>
            <input type="time" name="hora_inicio" onkeyup="operacion()">
        </div>

        <div class="col">
            <label for="">Hora de finalización: </label>
            <input type="time" name="hora_fin" onkeyup="operacion()">
        </div>

        <div class="col">
            <label for="">Tiempo total: </label>
            <input type="text" name="tiempo_total" onkeyup="operacion()">
        </div>

        <div class="col">
            <label for="">Total a pagar: </label>
            <input type="number" name="total_pago" onkeyup="operacion()">
        </div>

        <div class="col">
            <label for="cars">Empleado </label>
            <select id="cars" name="employee_id">
                <option selected="true" disabled="disabled"> empleado </option>
                @foreach ($employees as $employee)
                    <option value="{{ $employee->id }}">{{ $employee->nombres }} {{ $employee->apellidos }}</option>
                @endforeach

            </select>
        </div>

        <div class="col">
            <label for="cars">Forma de pago</label>
            <select id="cars" name="waytopay_id">
                <option selected="true" disabled="disabled">forma de pago</option>
                @foreach ($waytopays as $waytopay)
                    <option value="{{ $waytopay->id }}">{{ $waytopay->nombre }}</option>
                @endforeach

            </select>
        </div>
        <div class="col">
            <label for="cars">Servicio</label>
            <select id="cars" name="service_id">
                <option selected="true" disabled="disabled">servicio</option>
                @foreach ($services as $service)
                    <option value="{{ $service->id }}">{{ $service->nombres }}</option>
                @endforeach

            </select>
        </div>

        <input type="submit" onclick="operacion()" name="btn_enviar" value="Aceptar">

    </form>

    <script>
        function operacion() {
            var h_inicio = document.cita.hora_inicio.value;

            var h_fin = document.cita.hora_fin.value;



                var todo = (h_fin.substr(3, 2) - h_inicio.substr(3, 2));
                document.cita.tiempo_total.value = (todo)

                var pago = (todo * 1350);
                document.cita.total_pago.value = (pago)



            }

    </script>
@endsection
