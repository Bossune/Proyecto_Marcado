
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Proyecto X ---- Registro</title>
        <link type="text/css" rel="stylesheet" href="../Resources/Estilos/Estilos.css"/>
        <script src="../Resources/Script/jquery-3.1.1.mins.js"></script>
        <script>
            
        </script>
    </head>

    <body>
            <header>
                <div id="top-header">
                    <nav>        
                            <a href="../index.php">Proyecto X</a> |                 
                    </nav>
                </div>
            </header>
            
            <main>
                <form method="post" id="Registrar_Usuario" action="../php/registro.php">
                    <fieldset> 
                        <legend>Datos Importantes</legend>
                            Email: <input type="email" required name="email"><br>
                            Usuario: <input type="text" requiered name="usuario"><br>
                            Contraseña: <input type="password" requiered name="password"><br>
                    </fieldset>
                    <fieldset>
                        <legend>Datos del Usuario(Opcionales)</legend>
                            Avatar: <input type="file"  accept="image/*" name="Avatar"><br>
                            Sexo: <input type="radio"  name="sexo" value="femenino">Femenino
                                    <input type="radio"  name="sexo" value="masculino">Masculino <br>
                            Fecha de nacimiento: <input type="date" name="fecha_nacimiento">
                    
                    </fieldset>
                    <fieldset>
                        <legend>Registrar</legend>
                            <input id="Enviar" type="submit" value="Registrar">
                    </fieldset>
                </form>
            </main>

    </body>

    </html>