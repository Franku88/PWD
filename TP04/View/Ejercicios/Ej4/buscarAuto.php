<?php
include_once '../../../configuracion.php';
?>

<?php include_once STRUCTURE_PATH.'/Head.php';?>

<div class="modal-dialog m-auto">
    <div class="modal-content rounded-4 shadow contenedor-inactivo-steam">
        <div class="modal-header p-5 pb-4 border-bottom-0">
            <h1 class="mb-0"> Ingrese una patente</h1>
        </div>
        <div class="modal-body p-5 pt-0">
            <form id="formEj4" action="Action/accionBuscarAuto.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control rounded-3" name="patente" id="patente" minlength="7" maxlength="9" placeholder="" required>    
                    <label for="patente"> Patente </label>
                    <div class="invalid-feedback">
                        Formatos aceptados: 'ABC 123' o 'AB 123 CD'
                    </div>
                </div>
                <div class="form-floating mb-2">
                    <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary btn-steam4" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once STRUCTURE_PATH.'/Foot.php';?>