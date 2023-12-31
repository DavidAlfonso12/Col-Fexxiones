<!DOCTYPE html>
<?php
session_start();

if(empty($_SESSION["id"])){
  header("location: ../../login.html");
}
?>
<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>COL-FEXXIONES | Aliado </title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Agency HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Classified Marketplace Template v1.0">

  <!-- favicon -->
  <link href="../../images/Leonardo_Diffusion_XL_A_logo_for_a_clothing_brand_called_colfe_3 (1) 1.png" rel="shortcut icon">

  <!-- 
  Essential stylesheets
  =====================================-->
  <link href="../../plugins2/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="../../plugins2/bootstrap/bootstrap-slider.css" rel="stylesheet">
  <link href="../../plugins2/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../../plugins2/slick/slick.css" rel="stylesheet">
  <link href="../../plugins2/slick/slick-theme.css" rel="stylesheet">
  <link href="../../plugins2/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  
  <link href="../../css/stylesecond.css" rel="stylesheet">

</head>

<body class="body-wrapper">

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
                <div class="logo text-center">
					<a href="aliado.php">
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
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
							<li class="nav-item @@home">
								<a class="nav-link" href="#">Inicio</a>
							</li>
							<li class="nav-item dropdown dropdown-slide active">
								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#!">Perfil<span><i class="fa fa-angle-down"></i></span>
								</a>

								<!-- Dropdown list -->
								<ul class="dropdown-menu">
									<li><a class="dropdown-item active" href="aliado.php">Aliado</a></li>
									<li><a class="dropdown-item activeMyAds" href="../../aliado-my-ads.html">Mis Añadidos</a></li>
									<li><a class="dropdown-item activeFavouriteAds" href="../../aliado-favourite-ads.html"> Añadidos Favoritos</a></li>
									<li><a class="dropdown-item activeArchivedAds" href="../../aliado-archived-ads.html"> Añadidos Archivados</a></li>
									<li><a class="dropdown-item activePendingAds" href="../../aliado-pending-ads.html"> Pendiente Por Añadir</a></li>
									
									
								</ul>
							</li>
							
							
						</ul>





						<ul class="navbar-nav ml-auto mt-10">
							<li class="nav-item">
								<a class="nav-link login-button" href="cerrar_sesion.php">Cerrar Sesion</a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="../../registrar_producto.php"><i class="fa fa-plus-circle"></i> Añadir Producuto</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
<!--==================================
=            User Profile            =
===================================-->
<section class="aliado section">
  <!-- Container Start -->
  <div class="container">
    <!-- Row Start -->
    <div class="row">
      <div class="col-lg-4">
        <div class="sidebar">
          <!-- User Widget -->
          <div class="widget user-aliado-profile">
            <!-- User Image -->
            <div class="profile-thumb">
              <img src="../../images/ferxxo.png" alt="" >
            </div>
            <!-- User Name -->
            <h5 class="text-center"><?php echo $_SESSION["nombre"] ." ". $_SESSION["apellido"]?></h5>
            <p>Se unio el 28 Noviembre, 2023</p>
            <a href="user-profile.html" class="btn btn-main-sm">Editar Perfil</a>
          </div>
          <!-- aliado Links -->
        


          
          <!-- delete-account modal -->
          
<!--
<div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
        <h6 class="py-2">Are you sure you want to delete your account?</h6>
        <p>Do you really want to delete these records? This process cannot be undone.</p>
        <textarea class="form-control" name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
      </div>
      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-center">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>
 delete account popup modal end
     -->

        </div>
      </div>
      <div class="col-lg-8">
        <!-- Recently Favorited -->
        <div class="widget aliado-container my-adslist">
          <h3 class="widget-header">Mis Añadidos</h3>
          <table class="table table-responsive product-aliado-table">
            <thead>
              <tr>
                <th>Imagen</th>
                <th>Nombre Del Producto</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Acción</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="product-thumb">
                  <img width="80px" height="auto" src="../../images/aliado/r1.jfif" alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Camisa Negra Oversize</h3>
                  <span><strong>Publicado: </strong><time>Junio 27, 2023</time> </span>
                  <span class="status active"><strong>Estado:</strong>Activo</span>
                  <span class="location"><strong>Locacion:</strong>Bogota, Colombia</span>
                </td>
                <td class="product-category"><span class="categories">Camisa</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="aliado.html">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="aliado.html">
                          <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              <tr>
                <td class="product-thumb">
                  <img width="80px" height="auto" src="../../images/aliado/r2.jpg" alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Chaqueta Roja</h3>
                  <span><strong>Publicado: </strong><time>Agosto 12, 2023</time> </span>
                  <span class="status active"><strong>Estado:</strong>Activo</span>
                  <span class="location"><strong>Locacion:</strong>Bogota, Colombia</span>
                </td>
                <td class="product-category"><span class="categories">Chaqueta</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="aliado.html">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="aliado.html">
                          <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
              
              <tr>
                <td class="product-thumb">
                  <img width="80px" height="auto" src="../../images/aliado/r3.jpg" alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Shorts</h3>
                  <span><strong>Publicado: </strong><time>Agosto 25, 2023</time> </span>
                  <span class="status active"><strong>Estado:</strong>Activo</span>
                  <span class="location"><strong>Locacion:</strong>Bogota, Colombia</span>
                </td>
                <td class="product-category"><span class="categories">Shorts</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="aliado.html">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="aliado.html">
                          <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>


                <tr>
                <td class="product-thumb">
                  <img width="80px" height="auto" src="../../images/aliado/v1.jpg" alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Vestido Negro</h3>
                  <span><strong>Publicado: </strong><time>Septiembre 11, 2023</time> </span>
                  <span class="status active"><strong>Estado:</strong>Activo</span>
                  <span class="location"><strong>Locacion:</strong>Bogota, Colombia</span>
                </td>
                <td class="product-category"><span class="categories">Vestido</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="aliado.html">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="aliado.html">
                          <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>

              
              <tr>
                <td class="product-thumb">
                  <img width="80px" height="auto" src="../../images/aliado/m1.jpg" alt="image description"></td>
                <td class="product-details">
                  <h3 class="title">Trapo Para Trapear</h3>
                  <span><strong>Publicado: </strong><time>Octubre 31, 2023</time> </span>
                  <span class="status active"><strong>Estado:</strong>Activo</span>
                  <span class="location"><strong>Locacion:</strong>Bogota, Colombia</span>
                </td>
                <td class="product-category"><span class="categories">Camisa</span></td>
                <td class="action" data-title="Action">
                  <div class="">
                    <ul class="list-inline justify-content-center">
                      <li class="list-inline-item">
                        <a data-toggle="tooltip" data-placement="top" title="view" class="view" href="category.html">
                          <i class="fa fa-eye"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="aliado.html">
                          <i class="fa fa-pencil"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="aliado.html">
                          <i class="fa fa-trash"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

        </div>

        <!-- pagination -->
        <div class="pagination justify-content-center">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item">
                <a class="page-link" href="aliado.php" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item"><a class="page-link" href="aliado.php">1</a></li>
              <li class="page-item active"><a class="page-link" href="aliado.php">2</a></li>
              <li class="page-item"><a class="page-link" href="aliado.php">3</a></li>
              <li class="page-item">
                <a class="page-link" href="aliado.php" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
        <!-- pagination -->

      </div>
    </div>
    <!-- Row End -->
  </div>
  <!-- Container End -->
</section>

<!--============================
=            Footer            =
=============================-->

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
<script src="../../plugins2/jquery/jquery.min.js"></script>
<script src="../../plugins2/bootstrap/popper.min.js"></script>
<script src="../../plugins2/bootstrap/bootstrap.min.js"></script>
<script src="../../plugins2/bootstrap/bootstrap-slider.js"></script>
<script src="../../plugins2/tether/js/tether.min.js"></script>
<script src="../../plugins2/raty/jquery.raty-fa.js"></script>
<script src="../../plugins2/slick/slick.min.js"></script>
<script src="../../plugins2/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<script src="../../plugins/google-map/map.js" defer></script>

<script src="js/script.js"></script>




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
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="../../js/script.js"></script>

</body>

</html>