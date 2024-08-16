<?php

main();

function main()
{
    echo("Tabla del 2 con for: \n");
    for($i=1; $i <= 10; $i++) {
        echo("2 x ".$i. " = ".(2*$i)."\n");
    }

    echo("Tabla del 2 con while: \n");
    $i=1;
    while($i <= 10) {
        echo("2 x ".$i. " = ".(2*$i)."\n");
        $i++;
    }

    echo("Tabla del 2 con do while: \n");
    $i=1;
    do {
        echo("2 x ".$i. " = ".(2*$i)."\n");
        $i++;
    } while($i <= 10);
}
?>