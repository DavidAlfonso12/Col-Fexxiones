<?php

include("../login/conexion.php");

$nombreProducto = $_POST['nombreProducto'];
$cantidadDisponible = $_POST['cantidadDisponible'];
$precio = $_POST['precio'];
$descripcionProducto = $_POST['descripcionProducto'];
$categoria = $_POST['categoria'];
$estado = $_POST['estadoProducto'];

$archivo = $_FILES['fotoProducto'];
$extension = pathinfo($archivo["name"], PATHINFO_EXTENSION);
$newName = $nombreProducto .".". $categoria;
move_uploaded_file($archivo["tmp_name"], "../imagenes/shop/products/productos 2.0/$newName");


// $sql = "INSERT INTO `productos` ( `pro_nombre`, `pro_cant_disponible`, `pro_precio`, `pro_estado`, `pro_imagen`, `pro_categoria`, `pro_aliado`, `pro_fecha_registro`) VALUES
// ('$nombreProducto', '$cantidadDisponible', '$precio', '$estadoProducto', '$newName', '$categoria', 1, '2023-11-14');"