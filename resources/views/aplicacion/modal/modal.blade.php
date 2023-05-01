<!-- Modal USUARIO-->
<div class="modal fade" id="modal-usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST"> 
                    @csrf                   
                    <div class="mb-3">
                        <label for="empleado" class="form-label">Empleado</label>
                        <select id="empleado" class="form-select" name="empleado">
                            <option selected>Opción...</option>
                            @foreach ($personal as $p)
                                <option value="{{ $p -> cedulaPersonal }}">{{ $p -> cedulaPersonal }} - {{ $p-> nombresPersonal}} {{ $p-> apellidosPersonal}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nombre-usuario" class="col-form-label">Nombre de usuario:</label>
                        <input type="text" class="form-control" id="nombre-usuario" name="nombre-usuario">
                    </div>
                    <div class="mb-3">
                        <label for="estado" class="form-label">Estado</label>
                        <select id="estado" class="form-select" name="estado">
                            <option selected>Opción...</option>
                            <option value="1">Activo</option>
                            <option value="0">Inactivo</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>