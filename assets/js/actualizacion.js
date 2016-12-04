$(function() {
    $("#TuNota").click(function() {
        $("#nota").prop("disabled", false)
    });
    $("#Div_Comentario").click(function() {
        $("#Comentario").prop("disabled", false)
    });

    $("#Comentario").blur(function() {
        alert($("#Comentario").val());
        $.ajax({
            type: "POST",
            url: "./php/actualizar.php",
            data: { Id: $("#id_anime").val(), Comentario: $("#Comentario").val() }, // Datos del post. Los cuales recupera del campo rut y nombre.
            success: function(data) { // Si la consulta tiene exito.
            }
        });
    });

    $("#nota").bind("change input", function() {

        $.ajax({
            type: "POST",
            url: "./php/actualizar.php",
            data: { Id: $("#id_anime").val(), Nota: $("#nota").val() }, // Datos del post. Los cuales recupera del campo rut y nombre.
            success: function(data) { // Si la consulta tiene exito.
            }
        });
    });
});