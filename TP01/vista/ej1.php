<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Ejercicio 1 </title>
</head>

<body>
    <div>
        <h1 class="position-relative border p-4"> Ejercicio 1 </h1>
    </div>
    <div class="modal position-relative d-block p-5 py-md-5">
        <div class="rounded-4 shadow border p-3">
            <p class="fs-5">Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                llamar a un script -vernumero.php- y visualizar un mensaje que indique si el número
                enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                respuesta, que permita volver a la página anterior.
            </p>
        </div>
        <div class="modal-dialog">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-2"> Ingrese un numero </h1>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form action="Action/verNumero.php" method="GET">
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control rounded-3" name="numero" id="numero" placeholder="">    
                            <label for="numero">Numero</label>
                        </div>
                        <div class="form-floating mb-2">
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>