<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors','1');
chdir($_SERVER['DOCUMENT_ROOT']."/proyecto - copia/");   

require "./php/funciones.php";

if (!isset($_SESSION['Usuario']))
{
    if(isset($_POST['Usuario']) && isset($_POST['Password'] ))
    {
        verificar_login($_POST['Usuario'],$_POST['Password']);        
    }
}
?>