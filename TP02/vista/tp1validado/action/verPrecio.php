<?php
    include "../../../control/Cine.php";
    include "../../../util/funciones.php";

    $cine = new Cine();
    $precio = $cine->calcularPrecio(data_submitted()["edad"], data_submitted()["estudia"]);
?>

<html>

<head>
    <link href="../../../../lib/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Ejercicio 8: Resultado</title>
</head>
<body>
    <div>
        <h1 class="position-relative border p-4">Ejercicio 8: Resultado</h1>
    </div>
    <div class="modal position-relative d-block p-5 py-md-5">
        <div class="modal-dialog">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <p class="fw-bold mb-0 fs-3">El precio de su boleto es <b>$<?php echo($precio)?></b>.</p>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form action="../ej8.php">
                        <div class="form-floating mb-2">
                            <button class="w-100 btn btn-lg rounded-3 btn-primary">Volver</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>