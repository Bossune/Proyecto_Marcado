$(function() {
    $("#enviar").click(function(event) {
        if ($("#pass").val() != $("#pass_re").val()) {
            alert("La contraseña no coincide.");
            event.preventDefault();
            return false;
        } else {
            return true;
        }

    });
});