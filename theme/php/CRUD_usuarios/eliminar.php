<?php
	include("../login/conexion.php");

	$id=$_GET['id'];
		
	
	$query="SELECT * FROM usuarios WHERE usuarios.usuario_id =  ' " .$id."  '  " ;

	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0){
    $datos=mysqli_fetch_array($result)
  ?>
  <center>
    <h2>Eliminar producto</h2>
      <form method=POST name=frm onsubmit="return validar(this)" action="actualizar.php">
        
    <table width="500" border="1">
      <tr>
        <td>ID</td>
        <td><input readOnly name="txtId" type="text" id="txtId" size="30" value= "<?php echo $datos['usuario_id'];?>"</td>
      </tr>
      <tr>
        <td>Nombres</td>
        <td>
          <input readOnly name="txtNombres" type="text" id="txtNombres" size="30" value= "<?php echo $datos['usu_nombres'];?>"
        </td>
      </tr>
      <tr>
        <td>Apellidos</td>
        <td>
          <input readOnly name="txtApellidos" type="text" id="txtApellidos" size="30" value= "<?php echo $datos['usu_apellidos'];?>"
        </td>
      </tr>
      <tr>
        <td>Telefono</td>
        <td>
          <input readOnly name="txtTelefono" type="text" id="txtTelefono" size="30" value= "<?php echo $datos['usu_telefono'];?>"
        </td>
      </tr>
      <tr>
        <td>Email</td>
        <td>
          <input readOnly name="txtEmail" type="text" id="txtEmail" size="30" value= "<?php echo $datos['usu_email'];?>"
        </td>
      </tr>
      <tr>
        <td>Estado</td>
        <td>
          <input readOnly name="txtEstado" type="text" id="txtEstado" size="30" value= "<?php echo $datos['usu_estado'];?>"
        </td>
      </tr>

      <tr>
      <td>
     
	<center>
        <input type="submit" name="Submit" value="Eliminar" />
		</center>
      </td>
      <td>
	<center>
        <a href="../login/administradorusu.php">Volver</a>
		</center>
      </td>
    </tr>
  </table>

  <input type="hidden" name="Accion" value="Delete" />	
	</form>
    <?php
  }
    ?>