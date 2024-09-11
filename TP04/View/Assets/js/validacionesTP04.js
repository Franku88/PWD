/**
 * Formulario de buscarAuto en EJ4
 */
$(document).ready(function() {
    $('#formEj4').on('submit', function(event) {
        let isValid = true;
        var patente = $('#patente').val().trim().toUpperCase();
        const format1 = /^[A-Z]{3}\s\d{3}$/; // Formato ABC 123
        const format2 = /^[A-Z]{2}\s\d{3}\s[A-Z]{2}$/; // Formato AB 123 CD
        if (format1.test(patente) || format2.test(patente)) {
            $('#patente').removeClass('is-invalid');
        } else {
            $('#patente').addClass('is-invalid');
            isValid = false;
        }
        if (!isValid) {
            event.preventDefault();
        }
    });
    $('#patente').on('input', function() { //Si cambia el valor
        $(this).removeClass('is-invalid');
    });
});

/**
 * Formulario de listaPersonas en EJ5
 */
$(document).ready(function() {
    $('#formEj5').on('submit', function(event) {
        let isValid = true;
        var nrodni = $('#nrodni').val().trim();
        const format = /^\d{8}$/; // Numero de 8 digitos, sin puntos
        if (format.test(nrodni)) {
            $('#nrodni').removeClass('is-invalid');
        } else {
            $('#nrodni').addClass('is-invalid');
            isValid = false;
        }
        if (!isValid) {
            event.preventDefault();
        }
    });
    $('#nrodni').on('input', function() { //Si cambia el valor
        $(this).removeClass('is-invalid');
    });
});

/**
 * Formulario de nuevaPersona en EJ6
 */
$(document).ready(function() {
    $('#formEj6').on('submit', function(event) {
        let isValid = true;

        var nrodni = $('#nrodni').val().trim();
        var apellido = $('#apellido').val().trim();
        var nombre = $('#nombre').val().trim();
        var fechanac = $('#fechanac').val().trim();
        var codarea = $('#codarea').val().trim();
        var numlocal = $('#numlocal').val().trim();
        var domicilio = $('#domicilio').val().trim();

        const formatDni = /^\d{8}$/; // Numero de 8 digitos, sin puntos
        const formatNombre = /^[A-Za-zÀ-ÿ\s'-]{2,50}$/; // Cadenas de 2 a 50 caracteres
        const formatFecha = /^\d{4}-\d{2}-\d{2}$/; // Fecha en formato AAAA-MM-DD
        const formatTelefono = /^(?:\d{2}-\d{8}|\d{3}-\d{7}|\d{4}-\d{6})$/; // Numeros de 10 digitos, separados por '-' al 2, 3 o 4 digito
        const formatDomicilio = /^[\d\s\w\.,-]{5,200}$/; 

        if (formatDni.test(nrodni)) {
            $('#nrodni').removeClass('is-invalid');
        } else {
            $('#nrodni').addClass('is-invalid');
            isValid = false;
        }

        if (formatNombre.test(apellido)) {
            $('#apellido').removeClass('is-invalid');
        } else {
            $('#apellido').addClass('is-invalid');
            isValid = false;
        }

        if (formatNombre.test(nombre)) {
            $('#nombre').removeClass('is-invalid');
        } else {
            $('#nombre').addClass('is-invalid');
            isValid = false;
        }

        if (formatFecha.test(fechanac)) { // Cumple formato AAAA-MM-DD
            //Especifico T00:00:00 para evitar errores por zona horaria del sistema
            const dateNacimiento = new Date(fechanac+'T00:00:00'); 
            const datePiso = new Date('1900-01-01T00:00:00');
            const dateHoy = new Date();
            if ((datePiso <= dateNacimiento) && (dateNacimiento <= dateHoy)) { // Se encuentra dentro del rango permitido
                var edad = dateHoy.getFullYear() - dateNacimiento.getFullYear(); // Diferencia de años (Edad)
                const mes = dateHoy.getMonth() - dateNacimiento.getMonth(); // Diferencia de meses (getMonth obtiene 0-11)
                const dia = dateHoy.getDate() - dateNacimiento.getDate(); // Diferencia de dias
                if (mes < 0 || (mes == 0 && dia < 0)) { // Ajustar si el cumpleaños aún no ha ocurrido este año
                    edad--;
                }
                if (edad >= 18) {
                    $('#fechanac').removeClass('is-invalid');
                } else {
                    $('#fechanac').addClass('is-invalid');
                    isValid = false;
                }
            } else {
                $('#fechanac').addClass('is-invalid');
                isValid = false;
            }
        } else {
            $('#fechanac').addClass('is-invalid');
            isValid = false;
        }

        if (formatTelefono.test(codarea+'-'+numlocal)) {
            $('#codarea').removeClass('is-invalid');
            $('#numlocal').removeClass('is-invalid');
        } else {
            $('#codarea').addClass('is-invalid');
            $('#numlocal').addClass('is-invalid');
            isValid = false;
        }

        if (formatDomicilio.test(domicilio)) {
            $('#domicilio').removeClass('is-invalid');
        } else {
            $('#domicilio').addClass('is-invalid');
            isValid = false;
        }

        if (!isValid) {
            event.preventDefault();    
        }
    });

    $('#nrodni, #apellido, #nombre, #fechanac, #codarea, #numlocal, #domicilio').on('input change', function() { //Si cambia el valor
        $(this).removeClass('is-invalid');
    });
});