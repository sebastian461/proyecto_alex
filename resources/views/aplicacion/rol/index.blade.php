@extends('aplicacion.navegacion')

@section('estilos')
<link rel="stylesheet" href="{{ asset('recursos/css/tabla.css') }}">
@endsection

@section('content')

<div class="m-5">
    <button class="btn btn-success">Nuevo rol</button>
</div>

<div class="table-responsive-xxl">
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Rol</th>
                <th scope="col">Descripción</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Otto</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Mark</td>
                <td>Otto</td>
            </tr>
        </tbody>
    </table>
</div>


@endsection