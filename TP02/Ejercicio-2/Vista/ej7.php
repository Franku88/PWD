<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title> Ejercicio 7 Validado </title>
    </head>
    
    <body>
        <div>
            <h1 class="position-relative border p-4"> Ejercicio 7 Validado </h1>
        </div>
        <div class="modal position-relative d-block p-5 py-md-5">
            <div class="rounded-4 shadow border p-3">
                <p class="fs-5"> 
                    Crear una página con un formulario que contenga dos input de tipo text y un select. En
                    los inputs se ingresarán números y el select debe dar la opción de una operación
                    matemática que podrá resolverse usando los números ingresados. En la página que
                    procesa la información se debe mostrar por pantalla la operación seleccionada, cada
                    uno de los operandos y el resultado obtenido de resolver la operación. Ejemplo del
                    formulario: (Imagen en pdf TP1)
                </p>
            </div>
            <div class="modal-dialog d-flex justify-content-center">
                <div class="modal-content rounded-4 shadow w-75">
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <h1 class="fw-bold mb-0 fs-3"> Calculadora </h1>
                    </div>
                    <div class="modal-body p-5 pt-0">
                        <form id="miFormulario7" action="Action/verResultado.php" method="GET">
                            <div class="form-floating mb-3">
                                <input class="form-control rounded-3" type="number" name="num1" id="num1" placeholder="">
                                <label for="num1">Un numero</label>
                                <span class="text-danger error" id="errorNum1"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control rounded-3" type="number" name="num2" id="num2" placeholder="">
                                <label for="num2">Otro numero</label>
                                <span class="text-danger error" id="errorNum2"></span>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-control rounded-3" name="operacion" id="operacion" placeholder="">
                                    <option value="+" selected>SUMA</option>
                                    <option value="-">RESTA</option>
                                    <option value="*">MULTIPLICACIÓN</option>
                                </select>
                                <label for="operacion">Operacion:</label>
                                <span class="text-danger error" id="errorOperacion"></span>
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