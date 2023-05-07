<!-- Modal PERSONAL -->
<div class="modal fade" id="modal-personal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Empleado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST"> 
                    @csrf                   
                    <div class="mb-3">
                        <label for="cedulaPersonal" class="form-label">Cédula</label>
                        <input type="text" class="form-control" id="cedulaPersonal" maxlength="10" name="cedulaPersonal">
                    </div>
                    <div class="mb-3">
                        <label for="nombresPersonal" class="col-form-label">Nombres:</label>
                        <input type="text" class="form-control" id="nombresPersonal" maxlength="50" name="nombresPersonal">
                    </div>
                    <div class="mb-3">
                        <label for="apellidosPersonal" class="col-form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidosPersonal" maxlength="50" name="apellidosPersonal">
                    </div>
                    <div class="mb-3">
                        <label for="telefonoPersonal" class="col-form-label">Teléfono:</label>
                        <input type="text" class="form-control" id="telefonoPersonal" maxlength="10" name="telefonoPersonal">
                    </div>
                    <div class="mb-3">
                        <label for="correoPersonal" class="col-form-label">Correo:</label>
                        <input type="text" class="form-control" id="correoPersonal" maxlength="100" name="correoPersonal">
                    </div>
                    <div class="mb-3">
                        <label for="cargoPersonal" class="col-form-label">Cargo:</label>
                        <input type="text" class="form-control" id="cargoPersonal" maxlength="100" name="cargoPersonal">
                    </div>
                    <div class="mb-3">
                        <label for="descripcionPersonal" class="col-form-label">Descripción:</label>
                        <textarea class="form-control" id="descripcionPersonal" rows="3" maxlength="250" name="descripcionPersonal"></textarea>
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