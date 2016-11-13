<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

require "../php/funciones.php";

if (!isset($_SESSION['Usuario']))
{
    if(isset($_POST['Usuario']) && isset($_POST['Password'] ))
    {
        verificar_login($_POST['Usuario'],$_POST['Password']);        
    }
}

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proyecto X</title>
        <link type="text/css" rel="stylesheet" href="../Resources/Estilos/Estilos.css"/>
        
        <script src="../Resources/Script/jquery-3.1.1.mins.js"></script>
        <script>
        
            $(function(){ 
                   $("#btn-guardar").click(function(){ // Esto maneja el ajax. Cuando hago click en el boton hace la consulta con la respuesta del query reescribo  la lista del usuario.
                      
                       var url = "../php/guardar_lista.php";
                       $.ajax({
                           type:"POST",
                           url:url,
                           data: {Id_source: $("#Sources option:selected").val()}, // Datos del post. 
                           success: function (data) { // Si la consulta tiene exito.
                            $("#Sources_lista").html(data); // Remplzasa el contedio del select
                            }
                        });
                       });
                $("#btn-borrar").click(function(){ // Esto maneja el ajax. Cuando hago click en el boton para buscar. Hace una consulta por post y remplaza la planilla con la respuesta del pust.
                   var url = "../php/guardar_lista.php";
                   $.ajax({
                       type:"POST",
                       url:url,
                       data: {delete_source: $("#Sources_lista option:selected").val()}, // Datos del post. Los cuales recupera del campo rut y nombre.
                       success: function (data) { // Si la consulta tiene exito.
                        $("#Sources_lista").html(data); // Remplzasa el contedio del select
                        }

                   });
              
            });
                });
            </script>
    </head>

    <body>
            <header>
                <div id="top-header">
                    <nav>        
                            <a href="../index.php">Proyecto X</a> | 
                            <?php
                            if (empty($_SESSION['Usuario']))  //Si el usuario no esta logeado, muestra el login.
                            {
                                echo (" 
                                 <a id=\"logingform\" href=\"./html/Registro.php\">Registrarce</a>
							<form id=\"logingform\" method=\"post\" action=\"./index.php\">
   									 <input id=\"logingInput\" name=\"Usuario\" type=\"text\"  placeholder=\"Usuario\">
   									 <input id=\"logingInput\" name=\"Password\" type=\"password\" placeholder=\"Contraseña\">
  								<button type=\"submit\" value=\"Logear\" name=\"login\">Ingresar</button>
							</form>");   
                            }
                            else // Si esta logeado. en vez de mostrar el login. Muestra los favoritos , "Mi cuenta" y El Nombre del Usuario.
                            {
                                echo ("
                                <a href=\"\">Favoritos</a> <a href=\"./Lista.php\">Mi Lista</a> |\n <a href=\"\">Mi cuenta</a> |\n
                                <div id=\"user-status\">
                                    <form   id=\"logingform\" action=\"../php/logout.php\" method=\"post\">
                                        <button  type=\"submit\"  id=\"user-status\" name=\"Desconectar\" formmethod=\"post\">".$_SESSION['Usuario']."</button>
                                    </form>
                                </div>");
                            }
                            ?>
                
                    </nav>
                </div>
            </header>
            <aside>
                <div>
                    <h3>Menu</h3>
                    <h3>Login</h3>
                    <h3>Informacion del usuario/Avartar</h3>
                    <h3>Avartar</h3>
                </div>
            </aside>
            <main>
                
                    <fieldset>
                    <legend>Lista de series[REGISTRO]</legend>
                            <form method="post" >
                                <select id="Sources">
                                    <?php get_Sources()?>
                                </select>
                                
                            </form>    
                        <button id="btn-guardar">Guardar en lista.</button>
                    </fieldset>
                
                <fieldset>
                    <legend>Lista de series[USUARIO]</legend>
                            <form method="post" >
                                <select id="Sources_lista">
                                    <?php get_Sources_Usuario() ;?>
                                </select>
                                
                            </form>
                    <button id="btn-borrar">Borrar Source</button>
                    </fieldset>
                    
            </main>

    </body>

    </html>
    
