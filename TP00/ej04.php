<?php

main();

function main()
{
    /* Realizar un programa que, a partir de tres variables enteras llamadas $a, $b y $c,
    muestre por pantalla el valor de la mayor y la menor de ellas. Si por ejemplo asignamos los
    valores 15, 94 y 73 a $a, $b y $c respectivamente, por pantalla debe mostrarse:
    El mayor valor de 15, 94 y 73 es 73
    El menor valor de 15, 94 y 73 es 15*/
    $a = 73;
    $b = 15;
    $c = 94;

    if ($a>$b && $a>$c) {
        $mayor = $a;
        if ($b > $c) {
            $menor = $c;
        } else {
            $menor = $b;
        }
    } else {
        if ($b>$c) {
            $mayor = $b;
            if ($a>$c) {
                $menor = $c;
            } else {
                $menor = $a;
            }
        } else {
            $mayor = $c;
            if ($a>$b) {
                $menor = $b;
            } else {
                $menor = $a;
            }
        }
    }
    echo("El mayor valor de ".$a.", ".$b." y ".$c." es ".$mayor."\n");
    echo("El menor valor de ".$a.", ".$b." y ".$c." es ".$menor);
}
?>