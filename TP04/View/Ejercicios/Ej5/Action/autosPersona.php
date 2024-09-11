<?php
include_once '../../../../configuracion.php';
include_once ROOT_PATH.'/Util/funciones.php';
include_once ROOT_PATH.'/Controller/ABMPersona.php';
include_once ROOT_PATH.'/Controller/ABMAuto.php';
include_once ROOT_PATH.'/View/Assets/Helper.php';

$data = data_submitted();

if (!empty($data)) {
    $arrPersona = (new ABMPersona())->buscar(['NroDni'=>($data['nrodni'])]);
    if (!empty($arrPersona)) {
        $arreglo = [$arrPersona[0]->toArray()]; //Paso objeto a array para usar arrayToTable
        $resultado = "<h1> Persona </h1> 
            <div class='rounded-4 overflow-x-auto p-3'>".Helper::arrayToHtmlTable($arreglo)."</div>";
        $arrAutos = (new ABMAuto())->buscar(['DniDuenio'=>($data['nrodni'])]);
        if (!empty($arrAutos)) {
            $arreglo = [$arrAutos[0]->toArraySolo()]; //Paso objeto a array para usar arrayToTable, solo datos del auto
            $resultado .= "<h1> Autos registrados </h1> 
            <div class='rounded-4 overflow-x-auto p-3'>".Helper::arrayToHtmlTable($arreglo)."</div>";
        } else {
            $resultado .= "<div class='alert alert-warning border-steam-inactivo'>
            <h5> No posee vehículos registrados.</h5>
            </div>";
        }
    } else {
        $resultado = "<div class='alert alert-warning border-steam-inactivo'>
            <h5> Persona con DNI '".($data['nrodni'])."' no encontrada.</h5>
            </div>";
    }
}


?>

<?php include_once STRUCTURE_PATH.'/Head.php';?>
    <div class="container mt-5">
        <?php echo $resultado;?>
        <div>
            <a href="../listaPersonas.php" class="btn btn-secondary btn-steam2"> Volver </a>
        </div>
    </div>

<?php include_once STRUCTURE_PATH.'/Foot.php';?>