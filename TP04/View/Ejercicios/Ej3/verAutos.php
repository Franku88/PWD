<?php
include_once '../../../configuracion.php';
include_once ROOT_PATH.'/Controller/ABMAuto.php';
include_once ROOT_PATH.'/View/Assets/Helper.php';

$arrAutos = (new ABMAuto())->buscar();

$resultado = "";
if (empty($arrAutos)) {
    $resultado = "<h5> No se encuentran autos cargados en la BD.</h5>";
} else {
    $arreglo = [];
    foreach($arrAutos as $auto) {
        $arreglo[] = $auto->toArrayNyA(); //Solo obtiene nombre y apellido del duenio
    }
    $resultado = Helper::arrayToHtmlTable($arreglo);
}
?>

<?php include STRUCTURE_PATH.'/Head.php';?>
    
    <div class="mx-4 my-3">
        <h1> Autos Registrados </h1> 
        <div class="rounded-4 overflow-x-auto p-3"><?php echo($resultado);?></div>
    </div>
    
<?php include STRUCTURE_PATH.'/Foot.php';?>
        
