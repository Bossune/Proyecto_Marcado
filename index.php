<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');

require "./php/funciones.php";

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
        <link type="text/css" rel="stylesheet" href="./Resources/Estilos/Estilos.css"/>
    </head>

    <body>
            <header>
                <div id="top-header">
                    <nav>        
                            <a href="index.php">Proyecto X</a> | 
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
                                <a href=\"\">Favoritos</a> <a href=\"./html/Lista.php\">Mi Lista</a> |\n <a href=\"\">Mi cuenta</a> |\n
                                <div id=\"user-status\">
                                    <form   id=\"logingform\" action=\"./php/logout.php\" method=\"post\">
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
                <article>
                    <div>
                        <h3>Anuncios/Novedades.</h3>
                    </div>
                </article>
                <article>
                    <div>
                        <h3>Ultimas Series Agregadas.</h3>
                    </div>
                </article>
                <article>
                    <div>
                        <h3>Proximos Estrenos</h3>
                    </div>
                </article>
                <article>
                    <div>
                        <h3>ETC......</h3>
                    </div>
                </article>
                <article>
                    <div>
                        <h3>ETC......</h3>
                    </div>
                </article>
            </main>

    </body>

    </html>
    
