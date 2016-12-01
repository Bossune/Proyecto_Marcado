<?php
    include "./conexion.php";
    $resultado = $Link->query("select imagen from timagenes_source where id_source =".$_GET['id']);
    $row = $resultado ->fetch_assoc();
    header("Content-type: image/jpeg");
    echo $row['imagen'];
?>
