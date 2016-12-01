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
            chdir($_SERVER['DOCUMENT_ROOT']."/act07/");   

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
                        <button class=\"btn btn-success btn-block\" type=\"button\">Agregar a Libreria</button>
                    </td>
        </tr>";


    }
  }

  function get_Anime($id = "")
  {
      include './php/conexion.php';
    if ($id == "")
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