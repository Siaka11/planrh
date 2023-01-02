<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Plan Rh" />
    <meta name="description" content="Site de recrutement et de placement" />
    <meta name="author" content="Ange Brou" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion | Plan RH </title>

    <!-- Favicon -->
    <link href="images/log.png" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/range-slider/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/subtle-slideshow.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />

  </head>
<body>
<?php if(!empty($_SESSION['message'])): ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">

  <?=$_SESSION['message'];
    unset($_SESSION['message']); 
  ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Connexion</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/"> Accueil </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Se Connecter </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Signin -->
<?= $contenu ?>
<!--=================================
Signin -->

<br><br>

<!--=================================
footer-->
<footer class="footer bg-light">
  <div class="position-relative">
    <svg class="footer-shape"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      width="100%" height="85px">
      <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
        d="M-0.000,-0.001 L1923.000,-0.001 L1923.000,84.999 C1608.914,41.669 1279.532,19.653 962.500,19.000 C635.773,18.326 323.692,40.344 -0.000,84.999 C-0.000,-83.334 -0.000,168.332 -0.000,-0.001 Z"/>
      </svg>
    </div>
    <div class="container pt-5">
      <div class="row mt-5">
        <div class="col-lg-3 col-md-6">
          <div class="footer-link">
            <h5 class="text-dark mb-4">Emplois</h5>
            <ul class="list-unstyled">
              <li><a href="#">Trouver un emploi</a></li>
              <li><a href="#">Parcourir les domaine</a></li>
              <li><a href="#">Soumettre un CV</a></li>
              <li><a href="#">Se connecter</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="footer-link">
            <h5 class="text-dark mb-4">Employeur</h5>
            <ul class="list-unstyled">
              <li><a href="#">Publier un emploi</a></li>
              <li><a href="#">Gestion de la paie</a></li>
              <li><a href="#">Consultation RH</a></li>
              <li><a href="#">Chasse de Tête</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <h5 class="text-dark mb-4">Newsletters</h5>
          <div class="footer-subscribe">
            <p>Inscrivez-vous à notre newsletter pour recevoir les dernières nouvelles et offres.</p>
            <form>
              <div class="form-group mb-3">
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrez votre mail">
              </div>
              <button type="submit" class="btn btn-primary btn-md">Recevoir des notifications</button>
            </form>
          </div>
        </div>
        <!--
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <h5 class="text-dark mb-4">Download App</h5>
          <div class="footer-subscribe">
            <p>Download the latest Slick new job apps now</p>
            <div class="d-inline-block">
              <a class="btn btn-white btn-sm btn-app " href="#">
                <i class="fab fa-apple"></i>
                <div class="btn-text text-start">
                  <small class="fw-normal">Download on the </small>
                  <span class="mb-0 d-block">App Store</span>
                </div>
              </a>
              <a class="btn btn-white btn-sm btn-app mt-3" href="#">
                <i class="fab fa-google-play"></i>
                <div class="btn-text text-start">
                  <small class="fw-normal">Get it on  </small>
                  <span class="mb-0 d-block">Google Play</span>
                </div>
              </a>
            </div>
          </div>
        </div>
        -->
      </div>
    </div>
    <div class="footer-bottom bg-dark mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="d-flex justify-content-md-start justify-content-center">
              <ul class="list-unstyled d-flex mb-0">
                <li><a href="#">FAQ</a></li>
                <li><a href="#">A propos de nous</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 text-center text-md-end mt-4 mt-md-0">
            <p class="mb-0"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> All Rights Reserved | Design By <a href="#">Ange Brou</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
<!--=================================
footer-->

<!--=================================
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
<!--=================================
Back To Top-->

<!--=================================
Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 14:35:39 GMT -->
</html>
