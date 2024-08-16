<?php
/* Ejercicio 12 – Ejercitando con funciones varias*/
/** 
* @param int $numero
* Reciba como parámetro un numero y debe retornar el mes en letras que
* representa el numero ingresado. Los meses estarán almacenados en un array.
* (Ejemplo: para $numero=1 retorna “Enero”).
* */
function darMes($numero) {
    $cadena = "Invalido";
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre",);
    if ($numero>0 && $numero<13) {
        $cadena = $meses[($numero-1)];
    }
    return ($cadena);
}

/** 
* @param String $fecha 
* Da formato a un string con una fecha, ingresa a la función “dd/mm/aaaa” (Europeo)
* y debe devolver  “aaaa-mm-dd” (ISO 8601)
* */
function europeoAISO8601($fecha) {
    $arrayFecha = explode('/', $fecha); //divide string por delimitador
    return($arrayFecha[2]."-".$arrayFecha[1]."-".$arrayFecha[0]);
}

/**
 * @param double $monto
 * @param double $porcentaje (de 0 a 100)
 * Calcule el iva, ingresan a la función como dato, el monto y porcentaje a aplicar.
 * Si no se envía ningún porcentaje se tomara el 21% por defecto. La función deberá 
 * devolver el valor del iva calculado sobre el monto ingresado.
 * */
function calcularIVA($monto, $porcentaje = 21) {
    return ($monto*($porcentaje/100));
}

/**
 * @param double $importe
 * @param double $cotizacion
 * Recibe un importe y cotización. Caso que cotización sea 0 (por desconocerla), 
 * tendrá que suponer que se ingresó 6 (6$ = 1u$s). La función retornara el string 
 * “La cantidad de xxxx $ equivalen a xxxx u$s.” 
 */
function pesosADolares($importe, $cotizacion = 6) {
    if ($cotizacion == 0) {
        $cotizacion = 6;
    }
    return ('La cantidad de '.$importe.'$ equivalen a '.($importe/$cotizacion).' u$s.');
}

/**
 * @param double $numero
 * Una función que reciba como parámetro un numero float y 
 * devuelva el numero redondeado a dos decimales.
 */
function aDosDecimales($numero) {
    return round($numero, 2);
}

/**
 * @param String $numeroConComa
 * Una función que reciba como parámetro un número float con coma y devuelva el 
 * mismo número pero reemplazado la coma por un punto.
 * */
function comaPorPunto($numeroConComa) {
    $numeroConPunto = (float) str_replace(',', '.', $numeroConComa);
    return $numeroConPunto;
}

/**
 * @param String fechaNacimiento (formato 'aaaa-mm-dd')
 * Una función para calcular la edad de una persona. Recibe como parámetro la 
 * fecha de nacimiento y devuelve la edad de la misma 
 **/
function calcularEdad($fechaNacimiento) {
    $hoy = new DateTime();
    $nacimiento = new DateTime($fechaNacimiento);
    // Calcular la diferencia entre las dos fechas
    $diferencia = $hoy->diff($nacimiento);
    return ($diferencia->y);
}

/**
 * @param double[] $array
 * Una función para calcular el promedio de un conjunto de valores. Recibe como 
 * parámetro un array con valores numéricos y devuelve el promedio de esos valores
 */
function calcularPromedio($array) {
    $acumulador = 0; //Total
    foreach($array as $valor) {
        $acumulador = $acumulador + $valor; //Suma cada valor
    }
    return ($acumulador/count($array)); //Retorna el promedio
}
?>