@extends('aplicacion.navegacion')

@section('content')

<div class="m-5">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-usuario">Nuevo usuario</button>
</div>

<div class="table-responsive-xxl">
    <table class="table table-bordered table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Rol</th>
                <th scope="col">Usuario</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($usuario as $u)
                <tr>
                    <th scope="row">{{ $u -> idUsuario }}</th>
                    <td>{{ $u -> idRol }}</td>
                    <td>{{ $u -> nombreUsuario }}</td>
                    <td>{{ $u -> estadoUsuario }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('aplicacion.modal.modal')

@endsection