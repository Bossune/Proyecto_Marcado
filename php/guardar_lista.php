<?php
session_start();
chdir($_SERVER['DOCUMENT_ROOT']."/act07/");   
include "./php/funciones.php";
 if(!empty($_POST["Id_source"]))
 {
     include "./php/conexion.php";
     $query = mysqli_query($Link, "INSERT INTO tbiblioteca (Id_Usuario,Id_Source) values('".$_SESSION['Id']."','".$_POST['Id_source']."')");
     get_Sources_Usuario();
 }
if(!empty($_POST["delete_source"]))
 {
    include "./php/conexion.php";  
    $query = mysqli_query($Link, "Delete From tbiblioteca where Id_registro =".$_POST['delete_source']);
    
    get_Sources_Usuario();
 }

?>