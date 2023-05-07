<!-- Modal USUARIO-->
<div class="modal fade" id="modal-usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('crear-usuario') }}" method="POST"> 
                    @csrf                   
                    <div class="mb-3">
                        <label for="cedulaPersonal" class="form-label">Empleado</label>
                        <select id="cedulaPersonal" class="form-select" name="cedulaPersonal">
                            <option selected>Opción...</option>
                            @foreach ($personal as $p)
                                <option value="{{ $p -> cedulaPersonal }}">{{ $p -> cedulaPersonal }} - {{ $p-> nombresPersonal}} {{ $p-> apellidosPersonal}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nombreUsuario" class="col-form-label">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario">
                    </div>
                    <div class="mb-3">
                        <label for="idRol" class="form-label">Rol</label>
                        <select id="idRol" class="form-select" name="idRol">
                            <option selected>Opción...</option>
                            @foreach ($rol as $r)
                                <option value="{{ $r ->  idRol}}">{{ $r -> nombreRol }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="estadoUsuario" class="form-label">Estado</label>
                        <select id="estadoUsuario" class="form-select" name="estadoUsuario">
                            <option selected>Opción...</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>            
        </div>
    </div>
</div>
