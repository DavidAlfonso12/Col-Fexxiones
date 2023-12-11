<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>COL-FEXXIONES</title>

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

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>+57 3026485202</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="administrador.php">
						<!-- replace logo here -->
						<svg width="335px" height="29px" viewBox="0 0 450 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" font-size="40"
								font-weight="bold">
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="#000000">
									<text id="AVIATO">
										<tspan x="108.94" y="325">COL-FEXXIONES</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<ul class="top-menu text-right list-inline">
					

					<!-- Search -->
					<li class="dropdown search dropdown-slide">
						<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
								class="tf-ion-ios-search-strong"></i> Buscar</a>
						<ul class="dropdown-menu search-dropdown">
							<li>
								<form action="post"><input type="search" class="form-control" placeholder="Search..."></form>
							</li>
						</ul>
					</li><!-- / Search -->

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="administrador.php">volver</a>
					</li><!-- / Home -->
					
				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Lista de Aliados</h1>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Documento</th>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
			<th scope="col">Telefono</th>
			<th scope="col">Tipo Productos</th>
			<th scope="col">Dirección</th>
			<th scope="col">Email</th>
			<th scope="col">Empresa</th>
			<th scope="col">Estado</th>
			<th scope="col">Ventas</th>
			<th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
	<?php
		include("conexion.php");

		$sql = $link -> query("SELECT * FROM aliados");
		if(mysqli_num_rows($sql)>0){
			while ($datos = mysqli_fetch_array($sql)) { 
				echo "<tr>".
				"<td>".$datos['aliado_id']."</td>".
				"<td>".$datos['ali_documento']."</td>".
				"<td>".$datos['ali_nombres']."</td>".
				"<td>".$datos['ali_apellidos']."</td>".
				"<td>".$datos['ali_telefono']."</td>".
				"<td>".$datos['ali_tipo_producto']."</td>".
				"<td>".$datos['ali_direccion']."</td>".
				"<td>".$datos['ali_email']."</td>".
				"<td>".$datos['ali_nombre_empresa']."</td>".
				"<td>".$datos['ali_estado']."</td>".
				"<td>".$datos['ali_ventas']."</td>".
				"<td><a href=../CRUD_aliados/modificar.php?id=".$datos['aliado_id'].">Actualizar</a></td>".
				"</tr>";
			}
		}else{
			echo"No se encuentran usuarios registrados";
		}
		
		?>
  </tbody>
</table>
</section>


<section class="user-dashboard page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			
				<div class="dashboard-wrapper user-dashboard">
					<div class="media">
						<div class="pull-left">
							<img class="media-object user-img" src="../../images/cristiano1.jpg" alt="Image">
						</div>
						<div class="media-body">
							<h2 class="media-heading">Cristian Rodolfo</h2>
							<p>¡Hola! Soy un apasionado vendedor de moda colombiana con un ojo para las tendencias únicas y coloridas. Con más de cinco años de experiencia, ofrezco una cuidada selección de prendas que fusionan la elegancia tradicional colombiana con un toque moderno. </p>
                            <button type="button" class="btn btn-outline-light">Perfil</button>
						</div>
					</div>
					<div class="total-order mt-20">
						<h4>Datos del Aliado</h4>
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th>ID</th>
										<th>Fecha de registro</th>
										<th>N productos</th>
										<th>Contacto</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#!">#101</a></td>
										<td>Nov 21, 2023</td>
										<td>15</td>
										<td>Thegoat@gmail.com</td>
									</tr>
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
            <div class="col-md-6">
				
				<div class="dashboard-wrapper user-dashboard">
					<div class="media">
						<div class="pull-left">
							<img class="media-object user-img" src="../../images/dicarpio1.png" alt="Image">
						</div>
						<div class="media-body">
							<h2 class="media-heading">Leandro Diaz</h2>
							<p>Hola, soy un vendedor especializado en moda colombiana con un enfoque contemporáneo y vibrante. Mi pasión es conectar a los clientes con la rica herencia textil de Colombia, ofreciendo piezas únicas que combinan tradición y estilo moderno. </p>
                            <button type="button" class="btn btn-outline-light">Perfil</button>
						</div>
					</div>
					<div class="total-order mt-20">
						<h4>Datos del aliado</h4>
						<div class="table-responsive">
							<table class="table">
                            <thead>
									<tr>
										<th>ID</th>
										<th>Fecha de registro</th>
										<th>N productos</th>
										<th>Contacto</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#!">#102</a></td>
										<td>Nov 21, 2023</td>
										<td>5</td>
										<td>WolfStreet@outlook.com</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
            <div class="col-md-6">
				
				<div class="dashboard-wrapper user-dashboard">
					<div class="media">
						<div class="pull-left">
							<img class="media-object user-img" src="../../images/marcos.png" alt="Image">
						</div>
						<div class="media-body">
							<h2 class="media-heading">Marcos Zuluaga</h2>
							<p>¡Hola! Soy un entusiasta vendedor de moda colombiana, experto en fusionar lo auténtico con lo moderno. Mi misión es vestir a clientes con prendas que reflejen la rica cultura y artesanía de Colombia. Con un enfoque en la calidad y la moda sostenible.</p>
                            <button type="button" class="btn btn-outline-light">Perfil</button>
						</div>
					</div>
					<div class="total-order mt-20">
						<h4>Datos del aliado</h4>
						<div class="table-responsive">
							<table class="table">
                            <thead>
									<tr>
										<th>ID</th>
										<th>Fecha de registro</th>
										<th>N productos</th>
										<th>Contacto</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#!">#103</a></td>
										<td>Nov 21, 2023</td>
										<td>55</td>
										<td>LoveDoritos33@gmail.com</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
            <div class="col-md-6">
				
				<div class="dashboard-wrapper user-dashboard">
					<div class="media">
						<div class="pull-left">
							<img class="media-object user-img" src="../../images/saul1.png" alt="Image">
						</div>
						<div class="media-body">
							<h2 class="media-heading">Raul Buentipo</h2>
							<p>Hola, soy un vendedor apasionado de moda colombiana, comprometido en traer la elegancia y colorido de Colombia a tu armario. Con estilo auténtico y atención personalizada, te invito a descubrir la belleza de la moda con un toque colombiano único. </p>
                            <button type="button" class="btn btn-outline-light">Perfil</button>
						</div>
					</div>
					<div class="total-order mt-20">
						<h4>Datos del Aliado</h4>
						<div class="table-responsive">
							<table class="table">
                            <thead>
									<tr>
										<th>ID</th>
										<th>Fecha de registro</th>
										<th>N productos</th>
										<th>Contacto</th>
										
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><a href="#!">#104</a></td>
										<td>Nov 21, 2023</td>
										<td>33</td>
										<td>JimmyMc@gmail.com</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
            
		</div>
	</div>
</section>



<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://web.facebook.com/profile.php?id=100004737528439">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/its_jhon_r_r/">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://x.com/TH4N0S16?t=WuUKfQXJqzcXzM2Mu4VdVg&s=09">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.html">CONTACTO</a>
					</li>
					<li>
						<a href="shop.html">TIENDA</a>
					</li>
					<li>
						<a href="pricing.html">PRECIOS</a>
					</li>
					<li>
						<a href="contact.html">POLITICA DE PRIVACIDAD</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2023, Diseñado &amp; Desarrollado por <a href="https://www.sena.edu.co/es-co/Paginas/default.aspx">TEAM SENA</a></p>
			</div>
		</div>
	</footer>

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
    

		<!-- icons -->
		<script src="https://kit.fontawesome.com/2ef78ff00d.js" crossorigin="anonymous"></script>
  </body>
  </html>