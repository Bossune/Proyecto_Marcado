<?php
    if(!empty($_POST))
    {   
        session_start();
        include './conexion.php';
        if(!empty($_POST['Id'])&& !empty($_POST['Nota']))
        {
            $consulta ="Update tBiblioteca SET Nota_personal = ".$_POST['Nota']." where Id_Source =".$_POST['Id']." AND Id_Usuario =".$_SESSION['Id'];
            mysqli_query($Link,$consulta);
            exit();

        }
        if(!empty($_POST['Id'])&& !empty($_POST['Comentario']))
        {
            $consulta ="Update tBiblioteca SET Comentarios = \"".$_POST['Comentario']."\" where Id_Source =".$_POST['Id']." AND Id_Usuario =".$_SESSION['Id'];
            mysqli_query($Link,$consulta);

            exit();
        }
    }
    
?>