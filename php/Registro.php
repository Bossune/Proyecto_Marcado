<?php 
    if(empty($_POST))
    {
        header('Location: ../index.php');
    }

    else
    {
        echo var_dump($_POST);
        echo var_dump($_FILES['subida']);
        include './conexion.php';
        include './funciones.php';
        if(!empty($_FILES) && $_FILES['subida']['size']>0)
        {
            
            $fp      = fopen($_FILES['subida']['tmp_name'], 'r');
            $Avatar = fread($fp, filesize($_FILES['subida']['tmp_name']));
            $Avatar = addslashes($Avatar);
            fclose($fp);

            $Consulta = "INSERT INTO tusuario (Usuario,Password,Email,Avatar) VALUES ('".$_POST['Nombre_Usuario']."','".$_POST['Contraseña']."','".$_POST['Email']."', '$Avatar')";
        }
        else
        {
            $Consulta = "INSERT INTO tusuario (Usuario,Password,Email) VALUES ('".$_POST['Nombre_Usuario']."','".$_POST['Contraseña']."','".$_POST['Email']."')";
        }
        if(!mysqli_query($Link, $Consulta))
        {   
            echo mysqli_error($Link);
            echo "Error con la consulta.";
        }
        else
        {   
            session_start();
            verificar_login($_POST['Nombre_Usuario'],$_POST['Contraseña']);
        }


    }

?>