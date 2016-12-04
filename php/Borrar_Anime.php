<?php

    if(!empty($_GET['id']) && is_numeric($_GET['id']))
    {
        session_start();
        include './conexion.php';
        $Consulta= "DELETE FROM tbiblioteca where Id_Usuario='".$_SESSION['Id']."' and Id_Source='".$_GET['id']."'";
        if(!mysqli_query($Link, $Consulta))
        {    
            echo mysqli_error($Link);
            echo "Error con la consulta.";
        }
        else
        {
            header('location: '.$_SERVER['HTTP_REFERER']);
        }
    }

?>