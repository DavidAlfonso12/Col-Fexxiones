<?php 
include_once('conexion.php');
include_once('class.php');

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST['ali-admin'])){

      $opcionSeleccionada = $_POST['ali-admin'];

      switch ($opcionSeleccionada) {
        case '1':
            $email = $_POST["email"];
            $password = $_POST["password"];
      
            $sql = $link->query(" select * from aliados where ali_email='$email' and ali_password='$password' ");
            if($datos=$sql->fetch_object()){
              $_SESSION["id"]=$datos->aliado_id;
              $_SESSION["nombre"]=$datos->ali_nombres;
              $_SESSION["apellido"]=$datos->ali_apellidos;
              header("location: aliado.php");
            }else{
              echo "<div>Acceso denegado</div>";
            }
          break;
        case '2':
          if(isset($_POST['email']) && isset($_POST['password'])){
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            $sql = $link->query(" select * from administradores where admin_email='$email' and admin_password='$password' ");
            if($datos=$sql->fetch_object()){
              $_SESSION["id"]=$datos->administrador_id;
              $_SESSION["nombre"]=$datos->admin_nombres;
              header("location: administrador.php");
            }else{
              echo "<div>Acceso denegado</div>";
            }
          }
          break;
      }
    }else{
      if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = $link->query(" select * from usuarios where usu_email='$email' and usu_password='$password' ");
        if($datos=$sql->fetch_object()){
          $_SESSION["id"]=$datos->usuario_id;
          $_SESSION["nombre"]=$datos->usu_nombres;
          $_SESSION["apellido"]=$datos->usu_apellidos;
          header("location: usuario.php");
        }else{
          echo "<div>Acceso denegado</div>";
        }
      }
    }
}






// include_once('conexion.php');
// include_once('class.php');

//   session_start();

//   if(isset($_GET['cerrar_sesion'])){
//     session_unset();
//     session_destroy();
//   }

//   if(isset($_SESSION['rol'])){
//     switch ($_SESSION['rol']) {
//       case 1:
//         header('location: usuario.php');
//       break;
//       case 2:
//         header('location: aliado.php');
//       break;
//       case 3:
//         header('location: administrador.php');
//       break;
//       default:

//       break;
//     }
//   }

//   if(isset($_POST['email']) && isset($_POST['password'])){
//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     $db = new Database();
//     $query = $db->connect()->prepare('SELECT * FROM usuarios WHERE usu_email = :email AND usu_password = :password');
//     $query->execute(['email' => $email, 'password' => $password]);

//     $queryAliado = $db->connect()->prepare('SELECT * FROM aliados WHERE ali_email = :email AND ali_password = :password');
//     $queryAliado->execute(['email' => $email, 'password' => $password]);

//     $queryAdmin = $db->connect()->prepare('SELECT * FROM administradores WHERE admin_email = :email AND admin_password = :password');
//     $queryAdmin->execute(['email' => $email, 'password' => $password]);

//     $row = $query->fetch(PDO::FETCH_NUM);
//     $rowAliado = $queryAliado->fetch(PDO::FETCH_NUM);
//     $rowAdmin = $queryAdmin->fetch(PDO::FETCH_NUM);

//     if($row[7] == 1){
//         if($row == true){
//             $rol = $row[7];
//             $_SESSION['rol'] = $rol;
    
//             switch ($_SESSION['rol']) {
//                 case 1:
//                   header('location: usuario.php');
//                 break;
//                 case 2:
//                   header('location: aliado.php');
//                 break;
//                 case 3:
//                   header('location: administrador.php');
//                 break;
//                 default:
          
//                   break;
//             }
//         }else{
//             echo "El usuario ingresado no existe";
//         }
//     }elseif($rowAliado[12] == 2){
//         if($rowAliado == true){
//             $rol = $rowAliado[12];
//             $_SESSION['rol'] = $rol;
    
//             switch ($_SESSION['rol']) {
//                 case 1:
//                   header('location: usuario.php');
//                 break;
//                 case 2:
//                   header('location: aliado.php');
//                 break;
//                 case 3:
//                   header('location: administrador.php');
//                 break;
//                 default:
          
//                   break;
//             }
//         }else{
//             echo "El usuario ingresado no existe";
//         }
//     }elseif($rowAdmin[6] == 3){
//         if($rowAdmin == true){
//             $rol = $rowAdmin[6];
//             $_SESSION['rol'] = $rol;
    
//             switch ($_SESSION['rol']) {
//                 case 1:
//                   header('location: usuario.php');
//                 break;
//                 case 2:
//                   header('location: aliado.php');
//                 break;
//                 case 3:
//                   header('location: administrador.php');
//                 break;
//                 default:
          
//                   break;
//             }
//         }else{
//             echo "El usuario ingresado no existe";
//         }
//     }else{
//         echo "Usuario equivocado";
//     }

    
    
//   }


//-----------------------------------here


// $conexion = mysqli_connect("localhost","root","","colfexxiones");
// // Se consurta si es un usuario
// $consultaUsuarios = "SELECT * FROM usuarios WHERE usu_email = '$email' AND usu_password = '$password'";
// // Se consulta si es un aliado
// $consultaAliado = "SELECT * FROM aliados WHERE ali_email = '$email' AND ali_password = '$password'";
// // Se consulta si es un administrador
// $consultaAdministrador = "SELECT * FROM administradores WHERE admin_email = '$email' AND admin_password = '$password'";

// $resultadoUsuarios = mysqli_query($conexion, $consultaUsuarios);
// $resultadoAliados = mysqli_query($conexion, $consultaAliado);
// $resultadoAdministrador = mysqli_query($conexion, $consultaAdministrador);

// $filasUsuarios = mysqli_fetch_array($resultadoUsuarios);
// $filasAliados = mysqli_fetch_array($resultadoAliados);
// $filasAdministrador = mysqli_fetch_array($resultadoAdministrador);

// if($filasUsuarios["usu_rol"] == 1){
//     header("location:usuario.php");
// }elseif($filasAliados["ali_rol"] == 2){
//     header("location:aliado.php");
// }elseif($filasAdministrador["admin_rol"] == 3){
//     header("location:administrador.php");
// }
// else{
//     header("location:error.php");
// }

  



// mysqli_free_result($resultadoUsuarios);
// mysqli_free_result($resultadoUsuarios);
// mysqli_free_result($resultadoUsuarios);
// mysqli_close($conexion);
?>