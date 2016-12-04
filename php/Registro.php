<?php 
    if(empty($_POST))
    {
        header('Location: ../index.php');
    }

    else
    {
        echo var_dump($_POST);
        include './conexion.php';
        include './funciones.php';
        $Consulta = "INSERT INTO tusuario (Usuario,Password,Email) VALUES ('".$_POST['Nombre_Usuario']."','".$_POST['Contraseña']."','".$_POST['Email']."')";
        if(!mysqli_query($Link, $Consulta))
        {   
          
            echo "Error con la consulta.";
        }
        else
        {   
            session_start();
            verificar_login($_POST['Nombre_Usuario'],$_POST['Contraseña']);
        }


    }

?>