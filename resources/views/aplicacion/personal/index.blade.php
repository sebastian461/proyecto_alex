@extends('aplicacion.navegacion')

@section('content')

<div class="m-5">
    <button class="btn btn-success">Nuevo empleado</button>
</div>

<div class="table-responsive-xxl">
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Cedula</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Correo</th>
                <th scope="col">Cargo</th>
                <th scope="col">Descripción</th>
            </tr>
            @foreach ($personal as $p)
                <th scope="row">{{ $p -> cedulaPersonal }}</th>
                <td>{{ $p -> nombresPersonal }}</td>
                <td>{{ $p -> apellidosPersonal }}</td>
                <td>{{ $p -> telefonoPersonal }}</td>
                <td>{{ $p -> correoPersonal }}</td>
                <td>{{ $p -> cargoPersonal }}</td>
                <td>{{ $p -> descripcionCargoPersonal }}</td>
            @endforeach
        </thead>
        <tbody class="table-group-divider">

        </tbody>
    </table>
</div>

@endsection