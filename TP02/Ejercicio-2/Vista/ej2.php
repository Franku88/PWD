<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title> Ejercicio 2 Validado </title>
</head>

<body>
    <div>
        <h1 class="position-relative border p-4"> Ejercicio 2 Validado </h1>
    </div>
    <div class="modal position-relative d-block p-5 py-md-5">
        <div class="rounded-4 shadow border p-3">
            <p class="fs-5"> Crear una página php que contenga un formulario HTML que permita ingresar las horas
                de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                Enviar los datos del formulario por el método Get a otra página php que los reciba y
                complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                se cursan por semana.
            </p>
        </div>
        <div class="modal-dialog">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <h1 class="fw-bold mb-0 fs-3"> Ingrese horas de cursada para Programacion Web Dinamica de cada día </h1>
                </div>
                <div class="modal-body p-5 pt-0">
                    <form id="miFormulario2" action="Action/verHorasSemanalesPWD.php" method="GET">
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-3" type="number" name="lunes" id="lunes" placeholder="">
                            <label for="lunes">Lunes</label>
                            <span class="text-danger error" id="errorLunes"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-3" type="number" name="martes" id="martes" placeholder="">
                            <label for="martes">Martes</label>
                            <span class="text-danger error" id="errorMartes"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-3" type="number" name="miercoles" id="miercoles" placeholder="">
                            <label for="miercoles">Miercoles</label>
                            <span class="text-danger error" id="errorMiercoles"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-3" type="number" name="jueves" id="jueves" placeholder="">
                            <label for="jueves">Jueves</label>
                            <span class="text-danger error" id="errorJueves"></span>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-3" type="number" name="viernes" id="viernes" placeholder="">
                            <label for="viernes">Viernes</label>
                            <span class="text-danger error" id="errorViernes"></span>
                        </div>
                        <div class="form-floating mb-2">
                            <button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="Assets/validacion.js"></script>
</body>

</html>