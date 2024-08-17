<?php 
//Implementar funcion para obtener info de formularios
function data_submitted() 
{
	$data = array();
    if (!empty($_POST)) { //Chequea que metodo se utilizo
    	$data = $_POST;
    } else {
		if(!empty($_GET)) { 
            $data = $_GET;
		}
    }
	if (count($data) != 0) {
		foreach ($data as $indice => $valor) {
			if ($valor=="") {
				$data[$indice] = null;
			}
		}
	}
	return $data;
}

spl_autoload_register(
	function ($clase) 
	{
		echo "Cargamos la clase  ".$clase."<br>" ;
		$directorys = array(
			$GLOBALS['ROOT'].'modelo/',
			$GLOBALS['ROOT'].'control/',
		);
		//print_r($directorys) ;
		foreach($directorys as $directory){
		if(file_exists($directory.$clase . '.php')){  
				// echo "se incluyo".$directory.$class_name . '.php';
				require_once($directory.$clase . '.php');
				return;
			}           
		}
	}
);
?>