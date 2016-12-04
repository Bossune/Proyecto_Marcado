<?php

    if(!empty($_GET['id']) && is_numeric($_GET['id']))
    {
        session_start();
        include './conexion.php';
        $Consulta= "INSERT INTO tBiblioteca (Id_Usuario,Id_Source,Nota_personal) Values ('".$_SESSION['Id']."','".$_GET['id']."','1.0')";
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