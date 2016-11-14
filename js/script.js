   $(function() {
       $("#btn-guardar").click(function() { // Esto maneja el ajax. Cuando hago click en el boton hace la consulta con la respuesta del query reescribo  la lista del usuario.
           var url = "./php/guardar_lista.php"; // El archivo php al cual se le hace la consulta
           $.ajax({
               type: "POST", // El metodo utilizado para dicha consulta
               url: url, // La url del archivo al cual se le hace la consulta
               data: { Id_source: $("#Sources option:selected").val() }, // Recupera la el valor del select Seleccionado y lo encvia mediante post. 
               success: function(data) { // Si la consulta tiene exito.
                   $("#Sources_lista").html(data); // Remplzasa el contedio del select
               }
           });
       });
       $("#btn-borrar").click(function() { // Esto maneja el ajax. Cuando hago click en el boton hace la consulta con la respuesta del query reescribo  la lista del usuario.
           var url = "./php/guardar_lista.php"; // El archivo php al cual se le hace la consulta
           $.ajax({
               type: "POST", // El metodo utilizado para dicha consulta
               url: url, // La url del archivo al cual se le hace la consulta
               data: { delete_source: $("#Sources_lista option:selected").val() }, // Datos del post. Los cuales recupera del campo rut y nombre.
               success: function(data) { // Si la consulta tiene exito.
                   $("#Sources_lista").html(data); // Remplzasa el contedio del select
               }

           });

       });
   });