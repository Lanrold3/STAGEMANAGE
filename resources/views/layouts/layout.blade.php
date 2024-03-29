<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield("title")</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/eneam.jpg')}}" rel="icon">
  <link href="{{asset('assets/img/eneam.jpg')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  @vite([
  'resources/assets/vendor/animate.css/animate.min.css',
  'resources/assets/vendor/aos/aos.css',
  'resources/assets/vendor/aos/aos.js',
  'resources/assets/vendor/bootstrap/css/bootstrap.min.css',
  'resources/assets/vendor/bootstrap-icons/bootstrap-icons.css',
  'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
  'resources/assets/vendor/boxicons/css/boxicons.min.css',
  'resources/assets/vendor/glightbox/css/glightbox.min.css',
  'resources/assets/vendor/remixicon/remixicon.css',
  'resources/assets/vendor/swiper/swiper-bundle.min.css',
  'resources/assets/css/style.css',
  'resources/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
  'resources/assets/vendor/glightbox/js/glightbox.min.js',
  'resources/assets/vendor/isotope-layout/isotope.pkgd.min.js',
  'resources/assets/vendor/swiper/swiper-bundle.min.jsassets/vendor/swiper/swiper-bundle.min.js',
  'resources/assets/vendor/waypoints/noframework.waypoints.js',
  'resources/assets/vendor/php-email-form/validate.js',
  'resources/assets/js/main.js',
])
@yield("style")
  <!-- =======================================================
  * Template Name: Company - v4.7.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html"><span>STAGE</span> ENEAM</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="{{ @url("/") }}" class="active">Accueil</a></li>

          <li class="dropdown"><a href="#"><span>Demande de Stage</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{@route('stageRequest_form')}}">En mônome</a></li>
              <li><a href="{{@route('stageRequest_form')}}">En binôme</a></li>
              </li>
            </ul>
          </li>

          <li><a href="{{ @url("/stage/report/get") }}">Soumettre son Mémoire</a></li>
          <li><a href="#">En Savoir Plus</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div>

    </div>
  </header><!-- End Header -->
<div style="position:relative;margin-top:5rem;">
  @yield("body")
</div>
<footer class="bottom" style="position:relative;margin-top:5rem;" id="footer">

<div class="container d-md-flex py-4">

<div class="me-md-auto text-center text-md-start">
 <div class="copyright">
   &copy; Copyright <strong><span>STAGE ENEAM</span></strong>. Tous droits réservés
 </div>
 <div class="credits">
   <!-- All the links in the footer should remain intact. -->
   <!-- You can delete the links only if you purchased the pro version. -->
   <!-- Licensing information: https://bootstrapmade.com/license/ -->
   <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
  
 </div>
</div>
<div class="social-links text-center text-md-right pt-3 pt-md-0">
 <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
 <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
 <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
 <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
 <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
</div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</body>

</html>