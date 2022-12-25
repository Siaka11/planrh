<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Plan Rh" />
    <meta name="description" content="Site de recrutement et de placement" />
    <meta name="author" content="Ange Brou" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bienvenue | Plan RH </title>

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />


  </head>
  <style>
    .active{
      color: #00aeef !important;
    }
    .job-list-favourite{
      color: #e74c3c;
    }
    .favouritejaime{
      color: red;
    }
    </style>
<body>


<!--=================================
Header -->

<header class="header bg-dark">
  <div class="actu">
      <marquee class="defil">
          <li style="text-decoration: none;">cabinet spécialisé en Ressource Humaine: tél. +1 5148846349</li>
      </marquee>
      <div class="nouvel">
        <li>NEWS</li>
      </div>
  </div>
  <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
    <div class="container-fluid">
      <button id="nav-icon4" type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class="navbar-brand" href="/">
        <img class="img-fluid" src="images/logo.png" alt="logo">
      </a>
      <div class="navbar-collapse collapse justify-content-start">
        <ul class="nav navbar-nav">
          <li class="nav-item ">
            <a class="nav-link dropdown-toggle" id="one" href="/main" aria-haspopup="true" aria-expanded="false">Accueil</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link dropdown-toggle" href="/actualites" aria-haspopup="true" aria-expanded="false">
              Actualités
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Employeur<i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/employeur/erecrutement">Recrutement & Placement</a></li>
              <li><a class="dropdown-item" href="/employeur/recrutement_permanent">Recrutement Parmanent</a></li>
              <li><a class="dropdown-item" href="/employeur/chasseur_de_tete">Chasse de tête</a></li>
              <li><a class="dropdown-item" href="/employeur/placement_temporaire">Placement Temporaire</a></li>
              <li><a class="dropdown-item" href="/employeur/consultation_rh">Consultation RH</a></li>
              <li><a class="dropdown-item" href="/employeur/gestion_paie">Gestion de la Paie</a></li>
              <li><a class="dropdown-item" href="/employeur/impartition">Impartition</a></li>
              <li><a class="dropdown-item" href="/employeur/verification">Vérification Pré-emploi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Candidats <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/candidat/emplois">Emplois Disponibles</a></li>
              <li><a class="dropdown-item" href="/candidat/candidature">Candidatures Spontannées</a></li>
              <li><a class="dropdown-item" href="/candidat/recrutement">Processus de Recrutement</a></li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link dropdown-toggle" href="/formations" aria-haspopup="true" aria-expanded="false">
              Formations</i>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="/contact" aria-haspopup="true" aria-expanded="false">
              Nous Joindre</i>
            </a>
          </li>
        </ul>
      </div>
      <div class="add-listing">
          <div class="login d-inline-block me-4">
            <?php if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])): ?>

              <a href="main/logout"><i class="far fa-user pe-2"></i>Deconnexion </a><?=$_SESSION['user']['nom'] ?>
             

            <?php else: ?>
              <a href="login.html" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="far fa-user pe-2"></i>Connexion</a>

            
            <?php endif; ?>
          </div>
           <a class="btn btn-white btn-md" href="#">
            <img src="images/ca.png">
          </a>
        </div>
    </div>
  </nav>
</header>

<!--=================================
Container -->
<?php if(!empty($_SESSION['message'])): ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  
  <?=$_SESSION['message'];
    unset($_SESSION['message']); 
  ?>

  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>

  <?= $contenu ?>



<!--=================================
Footer -->
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
              <li><a href="/employeur/backend-employeur-poster-emplois.php">Publier un emploi</a></li>
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
Footer-->

<!--=================================
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
<!--=================================
Back To Top-->

<!--=================================
Signin Modal Popup -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="mb-0 text-center">Connexion</h4>
        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button> -->
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="login-register">
          <fieldset>
            <legend class="px-2">Candidat Ou Employeur</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item me-4">
                <a class="nav-link active"  data-bs-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Candidat</h6>
                      <p class="mb-0">Connexion en tant que Candidat</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  data-bs-toggle="tab" href="#employer" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Employeur</h6>
                      <p class="mb-0">Connexion en tant qu'Employeur</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4" method="POST">
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">User* :</label>
                    <input type="text" name="email" class="form-control" id="Email22">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Mot de Passe *</label>
                    <input type="password" name="motdepasse" class="form-control" id="password32">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    
                    <button class="btn btn-primary d-grid" name="send" >Connexion</button>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0 forgot-pass">
                      <a href="#">Mot de passe Oublié ?</a>
                      <p class="mt-1">Vous n'avez pas de Compte? <a href="#">Créé le</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form method="POST" class="mt-4" >
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">User * :</label>
                    <input type="text" name="email" class="form-control" id="Email2">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Mot de Passe *</label>
                    <input type="password" name="motdepasse" class="form-control" id="password2">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <button class="btn btn-primary d-grid" name="sendemployeur">Connexion</button>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0">
                      <a href="#">Mot de passe Oublié ?</a>
                      <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="Remember-02">
                        <p class="mt-1">Vous n'avez pas de Compte? <a href="#">Créé le</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
Signin Modal Popup -->

<!--=================================
Javascript -->

    <!-- Activer le menu selectionné -->

<script type="text/javascript">



  // function filter_data(){
    
  //   $action = 'fetch_data'
  //   let domaine = get_filter('domaine');
  //   $.ajax({
  //     url: "fetch_data.php",
  //     method:"POST",
  //     data: {domaine: domaine},
  //     success:function(data){
  //       $('.filter_data').html(data)
  //     }
  //   })

  // }

  // function get_filter(class_name){
  //   let myfilter = []
  //   $('.'+class_name+':checked').each(function()
  //   {
  //     myfilter.push($(this).val())
  //   })
  //  return myfilter
  
  // }

  // $('.common_selector').click(function(){
  //   console.log("hola")
  //   filter_data()

  // })

  // $('#myvaleur').clic
  // $('#myvaleur').click(function(){
  //   console.log("hola1")
  // })



</script>

    <script type="text/javascript">

        const activateMenu = window.location.pathname

        if(activateMenu === '/'){
          //alert('Merci')
          const navlink = document.getElementById('one')
          //console.log(navlink)
          navlink.classList.add('active')
        }else{


          const navlinks = document.querySelectorAll('nav li a')
          navlinks.forEach(link =>{
          if(link.href.includes(`${activateMenu}`)){
            link.classList.add('active')
            //console.log(`${activateMenu}`)
          }
        })
        }



    </script>

    
   
    

   <!-- Favorite like customize -->
   <script src="js/favoritelike.js"></script>

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/owl-carousel/owl-carousel.min.js"></script>
    <script src="js/slideshow/jquery.velocity.min.js"></script>
    <script src="js/slideshow/jquery.kenburnsy.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

    <script >

      var redirectlink = document.getElementById('redirectlink')
       //console alert(redirectlink)
      if(redirectlink){
        setInterval(redirectnow, 500)

        function redirectnow(){
          window.location.replace("http://www.w3schools.com");
        }
      }
      $(document).ready(function(){
        filter_data()
      //   let action = 'fetch_data'
      //   let domaine = get_filter('domaine');
      //   $.ajax({
      //   url: "/main/fetch_data",
      //   method:"POST",
      //   data: {action: action, domaine: domaine},
      //   success:function(data){
          
      //     $('.filter_data').html(data)
      //   }
      // })
      function filter_data(){
      //alert('okay')
      let action = 'fetch_data'
      let domaine = get_filter('domaine');
      //console.log(domaine)
      $.ajax({
        url: "/main/fetch_data",
        method:"POST",
        data: {action: action, domaine: domaine},
        success:function(data){
          
          $('.filter_data').html(data)
        }
      })

    }

    function get_filter(class_name){
      let myfilter = []

      if(!myfilter.length){

        console.log('value')
        $('.'+class_name+':checked').each(function()
        {
          myfilter.push($(this).val())
          
        })
        return myfilter
      }else{
        console.log('devalue')
        alert('Okay')
      }
      
      
    }

    $('.common_selector').click(function(){
      //console.log("hola")
      filter_data()

    })

    

      })
    </script>
    
</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/index-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 14:35:27 GMT -->
</html>
