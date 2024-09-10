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