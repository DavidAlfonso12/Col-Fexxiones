<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'colfexxiones';

$link = mysqli_connect($host, $user, $password) or die ("Error al conectarse al Servidor");

mysqli_select_db($link,$dbname) or die ("Error al conectarse con la Base de datos");

return $link;


?>