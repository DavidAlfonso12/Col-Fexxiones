<?php
	include("../login/conexion.php");

  $accion=$_POST["Accion"];

if(isset($accion))
{
  if($accion=="Update")
  {
    $query="UPDATE usuarios
        SET usu_nombres = '".$_POST['txtNombres']."',
          usu_apellidos = '".$_POST['txtApellidos']."',
          usu_telefono = '".$_POST['txtTelefono']."',
          usu_email = '".$_POST['txtEmail']."',
          usu_estado = '".$_POST['txtEstado']."',
          usu_password = '".$_POST['txtPassword']."'
          WHERE usuarios.usuario_id = '".$_POST['txtId']."'";
    $result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
    echo "<script>
        alert('Los datos fueron actualizados correctamente');
        location.href='../login/administradorusu.php';
        </script>";
  }
}