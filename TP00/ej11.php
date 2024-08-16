<?php
    //Completar aquí con la definición de la function saludo()
    date_default_timezone_set('America/Argentina/Buenos_Aires');

    function saludo()
    {
        $hora = (int) date('G'); //0-23
        if ($hora >= 5 && $hora < 13) {
            echo("Buenos días (5:00 a 12:59hs)");
        } else {
            if ($hora >= 13 && $hora < 20) {
                echo("Buenas tardes (13:00 a 19:59hs)");
            } else {
                echo("Buenas noches (20:00 a 4:59hs)");
            }
        }
    }

    $nombre = "SuNombre";
    echo("¡" . saludo() . " , $nombre!");
?>

<?php
    //Incluir aquí la definición de la function
    function divisores($parametro) {
        for ($i = 1; $i <= sqrt($parametro); $i++) {
            if ($parametro % $i == 0) { //Si el resto de la division es 0
                $divisores[] = $i; //Es divisor
            }
        }
        return $divisores;
    }

    $num=20;
    echo("Los divisores de $num son: ");
    foreach(divisores($num) as $divisor) {
        echo "$divisor <br />";
    }
    echo("\n");
?>