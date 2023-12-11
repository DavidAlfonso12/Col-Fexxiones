<?php
	include("../login/conexion.php");

  $accion=$_POST["Accion"];

if(isset($accion))
{
  if($accion=="Update")
  {
    $query="UPDATE aliados
        SET ali_documento = '".$_POST['txtDocumento']."',
          ali_nombres = '".$_POST['txtNombres']."',
          ali_apellidos = '".$_POST['txtApellidos']."',
          ali_tipo_producto = '".$_POST['txtTproducto']."',
          ali_telefono = '".$_POST['txtTelefono']."',
          ali_direccion = '".$_POST['txtDireccion']."',
          ali_email = '".$_POST['txtEmail']."',
          ali_nombre_empresa = '".$_POST['txtEmpresa']."',
          ali_estado = '".$_POST['txtEstado']."',
          ali_ventas = '".$_POST['txtVentas']."',
          ali_password = '".$_POST['txtPassword']."'
          WHERE aliados.aliado_id = '".$_POST['txtId']."'";
    $result=mysqli_query($link,$query) or die ("Error en la actualizacion de los datos. Error: ".mysqli_error());
    echo "<script>
        alert('Los datos fueron actualizados correctamente');
        location.href='../login/administradorali.php';
        </script>";
  }
}