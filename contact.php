<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Asotarso-Contacto</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/iconotaxi.ico" rel="icon">
  <link href="assets/img/iconotaxi.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v2.1.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo"><a href="index.html">ASOTARSO-CHIQUI</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="index.html" class="logo"><img src="assets/img/TAXI.jpg" alt="" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">

        <ul>

          <li><a href="index.html">Inicio</a></li>

        </ul>

      </nav><!-- .nav-menu -->



    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Bienvenido! En que podemos ayudarle?</h2>
          <ol>
            <li><a href="index.html">Inicio</a></li>
            <li>Contactenos</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

       <!--<div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div> -->

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Direccion:</h4>
                <p>*Direccion de la oficina*</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Correo Electronico:</h4>
                <p>asotarsochiqui@gmail.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Telefono de Oficina:</h4>
                <p>(+502)78526532</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
            <?php
              include ("controladores/comentariocontroller.php");
              $comentario= new Comentario();
              if(isset($_POST) && !empty($_POST)){
              $nombre = $comentario->sanitize($_POST['nombre']);
              $correo = $comentario->sanitize($_POST['correo']);
              $asunto = $comentario->sanitize($_POST['asunto']);
              $mensaje = $comentario->sanitize($_POST['mensaje']);

              $res = $comentario->insertarComentario($nombre, $correo, $asunto, $mensaje);
              if($res){
              echo "<div class='alert alert-success' role='alert'>Mensaje Enviado! Gracias por Escribirnos! Nos comunicaremos lo mas pronto posible, Dios le bendiga!</div>";
              }else{
              echo "<div class='alert alert-danger' role='alert'>Error al Enviar el Mensaje :(</div>";
              }

              }
            ?>

            <form method="post">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre Completo"  required>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="text" class="form-control" name="correo" id="correo" placeholder="Correo Electronico" required>
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Escriba su duda,comentario o queja..." required></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Asotarso</h3>
              <p>
                Avenida ingreso <br>
                A pocos metros de Susuki, Chiquimulilla S.R<br><br>
                <strong>Oficina:</strong> 78956324<br>
                <strong>Correo:</strong> asotarsochiqui@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Nuestro Sitio</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html">Inicio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.html#actividades">Actividades</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="team.html">Pilotos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contactenos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="login.html">Iniciar Sesion</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Servicios</h4>
            <p>
                Horarios de nuestros servicios<br>
                <br><br>
                <strong>Lunes a viernes:</strong><br>6:00-19:00 horas<br>
                <br>
                <strong>Sabados y domingos:</strong><br> 7:00-16:00 horas<br>
              </p>
           <!-- <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul> -->
          </div>

        </div>
      </div>
    </div>
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Asotarso Chiquimulilla / 2020</span></strong>. Todos los derechos Reservados
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
        Diseñado por <a href="#">SoftwareSolutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!--SWEETALERT2 -->
  <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>
  <script src="CodigoLogin.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Jquery  LOGIN -->
    <script src="Loginjs/jquery.js"></script>
    <!-- Bootstrap js -->
    <script src="Loginjs/bootstrap.min.js"></script>
    <!-- SweetAlert js -->
    <script src="Loginjs/sweetalert.min.js"></script>
    <!-- Js personalizado -->
    <script src="Loginjs/operaciones.js"></script>

</body>

</html>
