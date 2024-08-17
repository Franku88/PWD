$(function() {
    $("#miFormulario1").on("submit", function(event) {
        // Previene el envío del formulario si hay errores
        var esValido = true;

        // Limpia mensajes de error anteriores
        $(".error").text("");

        // Validación del nombre
        var numero = $("#numero").val().trim();
        if (numero == "") {
            $("#errorNumero").text('El numero es obligatorio.');
            esValido = false;
        }

        // Si el formulario no es válido, evita el envío
        if (!esValido) {
            event.preventDefault();
        }
    });

    $("#miFormulario2").on("submit", function(event) {
        // Previene el envío del formulario si hay errores
        var esValido = true;
        // Limpia mensajes de error anteriores
        $(".error").text("");

        // Validación del nombre
        var msjVacio = "Valor necesario.";
        var msjRango = "El valor debe ser igual o mayor a 0";
        var lunes = $("#lunes").val().trim();
        var martes = $("#martes").val().trim();
        var miercoles = $("#miercoles").val().trim();
        var jueves = $("#jueves").val().trim();
        var viernes = $("#viernes").val().trim();
        
        if (lunes == "") {
            $("#errorLunes").text(msjVacio);
            esValido = false;
        } else {
            if (lunes < 0) {
                $("#errorLunes").text(msjRango);
                esValido = false;
            }
        }
        
        if (martes == "") {
            $("#errorMartes").text(msjVacio);
            esValido = false;
        } else {
            if (martes < 0) {
                $("#errorMartes").text(msjRango);
                esValido = false;
            }
        }

        if (miercoles == "") {
            $("#errorMiercoles").text(msjVacio);
            esValido = false;
        } else {
            if (miercoles < 0) {
                $("#errorMiercoles").text(msjRango);
                esValido = false;
            }
        } 

        if (jueves == "") {
            $("#errorJueves").text(msjVacio);
            esValido = false;
        } else {
            if (jueves < 0) {
                $("#errorJueves").text(msjRango);
                esValido = false;
            }
        }

        if (viernes == "") {
            $("#errorViernes").text(msjVacio);
            esValido = false;
        } else {
            if (viernes < 0) {
                $("#errorViernes").text(msjRango);
                esValido = false;
            }
        }

        // Si el formulario no es válido, evita el envío
        if (!esValido) {
            event.preventDefault();
        }
    });

}
);