<?php
/*Ejercicio 13 (marcado como Ej12, supongo que por error)
Crear un archivo pruebaFunciones.php que incluya el archivo funcionesVarias.php 
creado en 1 agregue funcionalidad para invocar a las funciones definidas con datos 
de prueba y muestre el resultado de cada operación por pantalla.*/
include 'funcionesVarias.php';

$numero = 1;
echo("Mes ".$numero.": ".darMes($numero).".\n");

$fecha = "10/01/2020";
echo("Fecha en formato europeo: ".$fecha." a ISO8601: ".europeoAISO8601($fecha).".\n");

$monto = 2000;
echo("IVA para ".$monto.'$: '.calcularIVA($monto).".\n");

$importe = 1500;
echo(pesosADolares($importe, 1200)."\n");

$numero = 12.056;
echo("Numero ".$numero." a dos decimales es: ".aDosDecimales($numero).".\n");

$numeroConComa = "12,05";
echo("Numero con coma: ".$numeroConComa.", Numero con punto: ".comaPorPunto($numeroConComa).".\n");

echo("Si nacio el ".$fecha." entonces tiene ".calcularEdad(europeoAISO8601($fecha))." años.\n");

$array = array(10,8,9,10,7);
echo("El promedio de los valores ".(implode(',', $array))." es: ".calcularPromedio($array)."\n");

?>