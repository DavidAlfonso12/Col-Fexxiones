<?php 

include("../login/conexion.php");

session_start();

if (isset($_POST["register"])) {
    $documento = $_POST['ali_documento'];
    $aliadoName = $_POST['ali_nombres'];
    $aliadoApellidos = $_POST['ali_apellidos'];
    $aliadoproducto = $_POST['ali_Tproducto'];
    $aliadoTelefono = $_POST['ali_telefono'];
    $aliadodireccion = $_POST['ali_direccion'];
    $aliadoEmail = $_POST['ali_email'];
    $aliadoEmpresa = $_POST['ali_nombre_empresa'];
    $aliadoPassword = $_POST['ali_password'];
    $aliadoFoto = $_POST['ali_foto'];
    $aliVentas = 0;
    $rol = 2;
    $ali_estado = "activo";

    
    $query = $conexion->prepare('SELECT * FROM aliados WHERE ali_email =:aliEmail');
    $query->bindParam('aliEmail', $aliadoEmail, PDO::PARAM_STR);
    $query->execute();

    if($query->rowCount() > 0) {
        echo '<p>Ya existe un aiado registrado con el correo electronico que ingreso! </p>';
    }

    if($query->rowCount() == 0){
        $query = $conexion->prepare("INSERT INTO aliados(ali_documento, ali_nombres, ali_apellidos, ali_tipo_producto, ali_telefono, ali_direccion, ali_email, ali_nombre_empresa, ali_estado, ali_password,ali_foto, ali_ventas, ali_rol) VALUES(:documento, :aliNombres, :aliApellidos, :aliTipoProducto, :aliTelefono, :aliDireccion, :aliEmail, :aliNombreEmpresa, :aliEstado, :aliPassword, :aliFoto, :aliVentas, :rol)");
        $query->bindParam(":documento", $documento);
        $query->bindParam(":aliNombres", $aliadoName);
        $query->bindParam(":aliApellidos", $aliadoApellidos);
        $query->bindParam(":aliTipoProducto", $aliadoproducto);
        $query->bindParam(":aliTelefono", $aliadoTelefono);
        $query->bindParam(":aliDireccion", $aliadodireccion);
        $query->bindParam(":aliEmail", $aliadoEmail);
        $query->bindParam(":aliNombreEmpresa", $aliadoEmpresa);
        $query->bindParam(":aliEstado", $ali_estado);
        $query->bindParam(":aliPassword", $aliadoPassword);
        $query->bindParam(":aliFoto", $aliadoFoto);
        $query->bindParam(":aliVentas", $aliVentas);
        $query->bindParam(":rol", $rol);

        $result = $query->execute();

        if($result){
            echo "<p> El Aliado fue registrado exitosamente</p>";
        }else{
            echo "<p> Ocurrio un error al registrar al usuario</p>";
        }
    }

}







?>