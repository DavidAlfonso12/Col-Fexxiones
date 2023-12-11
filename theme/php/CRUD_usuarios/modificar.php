<!DOCTYPE html>
<?php
	include("../login/conexion.php");

	$id=$_GET['id'];
		
	
	$query="SELECT * FROM usuarios WHERE usuarios.usuario_id =  ' " .$id."  '  " ;

	$result=mysqli_query($link,$query) or die ("Error en la consulta de productos. Error: ".mysqli_error());
	if(mysqli_num_rows($result) > 0){
    $datos=mysqli_fetch_array($result)
  ?>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>ColFexxiones | Actualizar usuarios</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../../images/Leonardo_Diffusion_XL_A_logo_for_a_clothing_brand_called_colfe_3 (1) 1.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="../../plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="../../plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="../../plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="../../plugins/slick/slick.css">
  <link rel="stylesheet" href="../../plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../../css/style.css">

</head>

<body id="body">

<section class="signin-page account">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
          <a class="logo" href="index.html">
            <h2>COL-FEXXIONES</h2>
          </a>
          <h4 class="text-center">Actualizar usuarios</h4>
          <form class="text-left clearfix" method=POST name=frm action="actualizar.php">
            <div class="form-group">
              <label for="">ID</label>
              <input readOnly class="form-control" name="txtId" type="text" id="txtId" value= "<?php echo $datos['usuario_id'];?>">
            </div>
            <div class="form-group">
              <label for="">Nombres</label>
              <input class="form-control" name="txtNombres" type="text" id="txtNombres" value= "<?php echo $datos['usu_nombres'];?>">
            </div>
            <div class="form-group">
            <label for="">Apellidos</label>
              <input class="form-control" name="txtApellidos" type="text" id="txtApellidos" value= "<?php echo $datos['usu_apellidos'];?>">
            </div>
            <div class="form-group">
            <label for="">Telefono</label>
              <input class="form-control" name="txtTelefono" type="text" id="txtTelefono" value= "<?php echo $datos['usu_telefono'];?>">
            </div>
            <div class="form-group">
            <label for="">Email</label>
              <input class="form-control" name="txtEmail" type="text" id="txtEmail" value= "<?php echo $datos['usu_email'];?>">
            </div>
            <div class="form-group">
              <label for="">Estado</label>
              <input class="form-control" name="txtEstado" type="text" id="txtEstado" value= "<?php echo $datos['usu_estado'];?>">
            </div>
            <div class="form-group">
            <label for="">Contraseña</label>
            <input class="form-control" name="txtPassword" type="text" id="txtPassword" value= "<?php echo $datos['usu_password'];?>">
            </div>
            
            <div class="text-center">
              <input class="btn btn-main" type="submit" name="Submit" value="Enviar" />
            </div>
            <div class="text-center" style="margin-top: 10px;">
              <input class="btn btn-main" type="reset" name="Submit2" value="Restablecer" />
            </div>
              <input type="hidden" name="Accion" value="Update" />
          </form>
          <p class="mt-20"><a href="../login/administradorusu.php"> volver</a></p>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
  }
    ?>
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="../../plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="../../plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="../../plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="../../plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="../../plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="../../plugins/slick/slick.min.js"></script>
    <script src="../../plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="../../plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="../../js/script.js"></script>
    


  </body>
  </html>