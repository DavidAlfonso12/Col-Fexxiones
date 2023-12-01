<?php 
$email = $_POST["email"];
$password = $_POST["password"];
session_start();
$_SESSION["email"] = $email;

$conexion = mysqli_connect("localhost","root","","colfexxiones");
// Se consurta si es un usuario
$consultaUsuarios = "SELECT * FROM usuarios WHERE usu_email = '$email' AND usu_password = '$password'";
// Se consulta si es un aliado
$consultaAliado = "SELECT * FROM aliados WHERE ali_email = '$email' AND ali_password = '$password'";
// Se consulta si es un administrador
$consultaAdministrador = "SELECT * FROM administradores WHERE admin_email = '$email' AND admin_password = '$password'";

$resultadoUsuarios = mysqli_query($conexion, $consultaUsuarios);
$resultadoAliados = mysqli_query($conexion, $consultaAliado);
$resultadoAdministrador = mysqli_query($conexion, $consultaAdministrador);

$filasUsuarios = mysqli_fetch_array($resultadoUsuarios);
$filasAliados = mysqli_fetch_array($resultadoAliados);
$filasAdministrador = mysqli_fetch_array($resultadoAdministrador);

if($filasUsuarios["usu_rol"] == 1){
    header("location:usuario.php");
}elseif($filasAliados["ali_rol"] == 2){
    header("location:aliado.php");
}elseif($filasAdministrador["admin_rol"] == 3){
    header("location:administrador.php");
}
else{
    header("location:error.php");
}
mysqli_free_result($resultadoUsuarios);
mysqli_free_result($resultadoUsuarios);
mysqli_free_result($resultadoUsuarios);
mysqli_close($conexion);
?>