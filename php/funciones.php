<?php
error_reporting(E_ALL);
ini_set('display_errors','1');


function verificar_login($user,$password)
{
    include("../php/conexion.php");

    if($query = mysqli_query($Link, "SELECT * FROM tUsuario WHERE Usuario = '$user' and Password = '$password'"))
    {   
        if($row = mysqli_fetch_assoc($query))
        {

            $_SESSION['Usuario'] = $row['Usuario'];
            $_SESSION['Id'] = $row['Id'];
            header("location:../index.php");
            
        }
        else
        {   
            echo "El Usuario no existe.". mysqli_error($Link);
        }
    }
    else
    {
        echo "Error en la consulta." . mysqli_error($Link);
    }

}


  function get_Libreria()
  {
    include './php/conexion.php';
    $query = mysqli_query($Link,"Select tSource.*, tBiblioteca.Nota_personal from tSource INNER JOIN tBiblioteca ON tSource.Id_Source = tBiblioteca.Id_Source where tBiblioteca.Id_Usuario = ".$_SESSION['Id']);
    while($row = mysqli_fetch_assoc($query))
    {
        echo "<tr class=\"active\">
                    <td> <img class=\"img-thumbnail img-responsive\" src=\"./php/get_img.php?id=".$row['Id_Source']."\" width=\"120\"></td>
                    <td><a href=\"./Anime.php?id=".$row['Id_Source']."\">".$row['Titulo']."</a></td>
                    <td>".$row['Capitulos']."</td>
                    <td>".$row['Nota']."/10 </td>
                    <td>".$row['Nota_personal']."/10 </td>
                    <td>
                        <a href=\"./php/Borrar_Anime.php?id=".$row['Id_Source']."\"><button class=\"btn btn-danger btn-block\" type=\"button\">Borrar de libreria Libreria</button></a>
                    </td>
        </tr>";
    }  
  }

  function Buscar_Source($Anime = "")
  {
    include './php/conexion.php';
    if ($Anime == "")
    {
        $query = mysqli_query($Link,"Select * from tSource");
    }
    else
    {
        $query = mysqli_query($Link,"Select * from tSource where Titulo like '%".$Anime."%'"); 
    }
    while($row = mysqli_fetch_assoc($query))
    {
        echo "<tr class=\"active\">
                    <td> <img class=\"img-thumbnail img-responsive\" src=\"./php/get_img.php?id=".$row['Id_Source']."\" width=\"100\"></td>
                    <td rowspan=\"1\"><a href=\"./Anime.php?id=".$row['Id_Source']."\">".$row['Titulo']."</a></td>
                    <td>".$row['Nota']."/10 </td>
                    <td rowspan=\"1\">
                        <a href=\"./php/Agregar_Anime.php?id=".$row['Id_Source']."\"><button class=\"btn btn-success btn-block\" type=\"button\">Agregar a Libreria</button></a>
                    </td>
        </tr>";


    }
  }

  function get_Anime($id = "")
  {
    include './php/conexion.php';
    if (empty($id))
    {
        echo "Falta id.";
    }
    else
    {
        $query = mysqli_query($Link,"Select * from tSource where Id_Source = $id"); 
        $row = mysqli_fetch_assoc($query);

        return $row;
    }
    
    
  }

  function get_AnimeUsuario($id_anime,$id_usuario)
  {
    if(empty($id_anime) && empty($id_usuario))
    {
        echo "Falta anime y Usuario";
    }
    else
    {
        include './php/conexion.php';
        $consulta = "Select * from tBiblioteca where Id_Source = $id_anime AND Id_Usuario = $id_usuario";
        if($query = mysqli_query($Link,$consulta))
        {
            $row = mysqli_fetch_object($query);
            return $row;
        } 
        else
        {
            return NULL;
        }

    }

  
  }
  function get_Sources() 
    {     
            include("./php/conexion.php");

            $query = mysqli_query($Link, "SELECT * FROM tsource");
            while($row = mysqli_fetch_assoc($query))
            {
                echo "<option value=\"".$row['Id_Source']."\">".$row['Titulo']."</option>";
            }
            
        
    }

 function get_Sources_Usuario() 
    {     
            include("../php/conexion.php");

            $query = mysqli_query($Link, "Select tbiblioteca.Id_registro , tsource.Titulo FROM tbiblioteca INNER JOIN tsource ON tbiblioteca.Id_Source = tsource.Id_Source Where tbiblioteca.Id_Usuario =".$_SESSION['Id']."");
            while($row = mysqli_fetch_assoc($query))
            {
                echo "<option value=\"".$row['Id_registro']."\">".$row['Titulo']."</option>";
            }
            
        
    }

?>