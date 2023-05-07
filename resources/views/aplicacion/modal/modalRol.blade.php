<!-- Modal ROL -->
<div class="modal fade" id="modal-rol" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label for="nombreRol" class="col-form-label">Rol:</label>
                        <input type="text" class="form-control" id="nombreRol" maxlength="20" name="nombreRol">
                    </div>
                    <div class="mb-3">
                        <label for="descripcionRol" class="col-form-label">Descripción:</label>
                        <textarea class="form-control" id="descripcionRol" rows="3" maxlength="250" name="descripcionRol"></textarea>
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