@extends('aplicacion.navegacion')

@section('content')

<div class="m-5">
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal-rol">Nuevo rol</button>
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
            @foreach ($rol as $r)
                <tr>
                    <th scope="row">{{ $r -> idRol }}</th>
                    <td>{{ $r -> nombreRol }}</td>
                    <td>{{ $r -> descripcionRol }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('aplicacion.modal.modalRol')

@endsection