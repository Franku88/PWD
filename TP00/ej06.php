<?php
main();

function main() 
{
    $horarios = array(
        "lunes" => array("Nombre"=> "Materia1", "Horas"=> 2),
        "martes" => array("Nombre"=> "Materia2", "Horas"=> 3),
        "miercoles" => array("Nombre"=> "Materia3", "Horas"=> 3),
        "jueves" => array("Nombre"=> "Materia2", "Horas"=> 2),
        "viernes" => array("Nombre"=> "Materia1", "Horas"=> 2),
    );

    foreach($horarios as $dia) {
        echo("Materia: ".$dia["Nombre"].", Carga horaria: ". $dia["Horas"]."\n");
    }
}
?>