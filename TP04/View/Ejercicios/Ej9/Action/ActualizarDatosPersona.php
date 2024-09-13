<?php
include_once '../../../../configuracion.php';
include_once ROOT_PATH.'/Util/funciones.php';
include_once ROOT_PATH.'/Controller/ABMPersona.php';
include_once ROOT_PATH.'/Controller/ABMAuto.php';

$data = data_submitted();

$resultado = "<div class='alert alert-warning border-steam-inactivo'>
                <h5> Datos no recibidos.</h5>
            </div>";

if (!empty($data)) {
 
}

?>

<?php include_once STRUCTURE_PATH.'/Head.php';?>
 <h1>EN ACTION ACTUALIZAR PERSONA</h1>
    <div class="container mt-5">
        <?php echo $resultado;?>
        <div>
            <a href="../BuscarPersona.php" class="btn btn-secondary btn-steam2"> Volver </a>
        </div>
    </div>

<?php include_once STRUCTURE_PATH.'/Foot.php';?>