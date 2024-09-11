<?php
include_once '../../../configuracion.php';
?>

<?php include_once STRUCTURE_PATH.'/Head.php';?>

    <div class="modal-dialog m-auto">
        <div class="modal-content rounded-4 shadow contenedor-inactivo-steam">
            <div class="modal-header p-5 pb-4 border-bottom-0">
                <h1 class="mb-0">Registrar Persona</h1>
            </div>
            <div class="modal-body p-5 pt-0">
                <form id="formEj6" action="Action/accionNuevaPersona.php" method="POST">
                    
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" name="nrodni" id="nrodni" placeholder="">
                        <label for="nrodni"> DNI </label>
                        <div class="invalid-feedback">
                        DNI de 8 digitos, sin puntos.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" name="apellido" id="apellido" placeholder="">
                        <label for="apellido"> Apellido </label>
                        <div class="invalid-feedback">
                        Ingrese solo letras.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" name="nombre" id="nombre" placeholder="">
                        <label for="nombre"> Nombre </label>
                        <div class="invalid-feedback">
                        Ingrese solo letras.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="date" class="form-control rounded-3" name="fechanac" id="fechanac" placeholder="">
                        <label for="fechanac"> Fecha de Nacimiento </label>
                        <div class="invalid-feedback">
                        Debe ser mayor de 18 años.
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="form-floating mb-3 me-1 w-25">
                            <input type="text" class="form-control rounded-3" name="codarea" id="codarea" placeholder="" minlength="2" maxlength="4">
                            <label for="codarea"> Cod. area </label>
                            <div class="invalid-feedback">
                            Deben ser 10 digitos entre Cod. area y Número.
                            </div>
                        </div>

                        <div class="form-floating mb-3 ms-1 w-75">
                            <input type="text" class="form-control rounded-3" name="numlocal" id="numlocal" placeholder="" minlength="6" maxlength="8">
                            <label for="numlocal"> Número </label>
                            <div class="invalid-feedback">
                            Deben ser 10 digitos entre Cod. area y Número.
                            </div>
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control rounded-3" name="domicilio" id="domicilio" placeholder="">
                        <label for="domicilio"> Domicilio </label>
                        <div class="invalid-feedback">
                        Domicilio no válido.
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