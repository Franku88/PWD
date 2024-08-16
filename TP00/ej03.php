<?php
main();
function main()
{
    $persona = array(
        "apellido" => "Benitez",
        "nombre" => "Franco",
        "documento" => "12345678",
        "direccion" => "Calle Falsa 123"
    );
    echo ("Apellido: " . $persona["apellido"] . "\n" .
        "Nombre: " . $persona["nombre"] . "\n" .
        "Documento: " . $persona["documento"] . "\n" .
        "Direccion: " . $persona["direccion"] . "\n");
}
