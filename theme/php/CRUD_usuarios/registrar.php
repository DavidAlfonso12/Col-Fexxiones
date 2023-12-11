<?php 

include("../login/conexion.php");

session_start();

if (isset($_POST["register"])) {
    $userName = $_POST['user_nombres'];
    $userApellidos = $_POST['user_apellidos'];
    $userTelefono = $_POST['user_telefono'];
    $userEmail = $_POST['user_email'];
    $userPassword = $_POST['user_password'];
    $userFoto = $_POST['user_foto'];
    $rol = 1;
    $user_estado = "activo";

    //$password_hash = password_hash($userPassword, PASSWORD_BCRYPT);

    
    $query = $conexion->prepare('SELECT * FROM usuarios WHERE usu_email =:userEmail');
    $query->bindParam('userEmail', $userEmail, PDO::PARAM_STR);
    $query->execute();

    if($query->rowCount() > 0) {
        echo '<p>El correo electronico que ingreso ya existe! </p>';
    }

    if($query->rowCount() == 0){
        $query = $conexion->prepare("INSERT INTO usuarios(usu_nombres, usu_apellidos, usu_telefono, usu_email, usu_estado, usu_password, usu_rol)VALUES(:userName, :userApellidos, :userTelefono, :userEmail, :userEstado, :userPassword, :rol)");
        $query->bindParam(":userName", $userName);
        $query->bindParam(":userApellidos", $userApellidos);
        $query->bindParam(":userTelefono", $userTelefono);
        $query->bindParam(":userEmail", $userEmail);
        $query->bindParam(":userEstado", $user_estado);
        $query->bindParam(":userPassword", $userPassword);
        $query->bindParam(":rol", $rol);

        $result = $query->execute();

        if($result){
            echo "<p> El Usurio fue registrado exitosamente</p>";
        }else{
            echo "<p> Ocurrio un error al registrar al usuario</p>";
        }
    }

}
?>