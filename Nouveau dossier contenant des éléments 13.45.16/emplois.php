<!DOCTYPE html>
<html lang="fr">
  
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Plan Rh" />
    <meta name="description" content="Site de recrutement et de placement" />
    <meta name="author" content="Ange Brou" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Emplois Disponibles | Plan RH </title>

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

<!--=================================
header -->
<header class="header bg-dark">
  <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
    <div class="container-fluid">
      <button id="nav-icon4" type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class="navbar-brand" href="index.html">
        <img class="img-fluid" src="images/logo.png" alt="logo">
      </a>
      <div class="navbar-collapse collapse justify-content-start">
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link" href="index.html" role="button" aria-haspopup="true" aria-expanded="false">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="actualite.html" aria-haspopup="true" aria-expanded="false">
              Auctualités
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Employeur<i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="erecrutement.php">Recrutement & Placement</a></li>
              <li><a class="dropdown-item" href="recrutement-permanent.php">Recrutement Parmanent</a></li>
              <li><a class="dropdown-item" href="chasseur-de-tete.php">Chasse de tête</a></li>
              <li><a class="dropdown-item" href="placement-temporaire.php">Placement Temporaire</a></li>
              <li><a class="dropdown-item" href="consultation-rh.php">Consultation RH</a></li>
              <li><a class="dropdown-item" href="gestion-paie.php">Gestion de la Paie</a></li>
              <li><a class="dropdown-item" href="impartition.php">Impartition</a></li>
              <li><a class="dropdown-item" href="verification.php">Vérification Pré-emploi</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Candidats <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li class="active"><a class="dropdown-item" href="emplois.php">Emplois Disponibles</a></li>
              <li><a class="dropdown-item" href="candidature.php">Candidatures Spontannées</a></li>
              <li><a class="dropdown-item" href="recrutement.php">Processus de Recrutement</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="formations.html" aria-haspopup="true" aria-expanded="false">
              Formations</i>
            </a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="contact.html" aria-haspopup="true" aria-expanded="false">
              Nous Joindre</i>
            </a>
          </li>
        </ul>
      </div>
      <div class="add-listing">
          <div class="login d-inline-block me-4">
            <a href="login.html" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="far fa-user pe-2"></i>Connexion</a>
          </div>
           <a class="btn btn-white btn-md" href="post-a-job.html">
            <img src="images/ca.png">
          </a>
        </div>
    </div>
  </nav>
</header>
<!--=================================
header -->

<!--=================================
banner -->
<section class="header-inner header-inner-big bg-holder text-white" style="background-image: url(images/bg/banner-01.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="job-search-field">
          <div class="job-search-item">
            <form class="form row">
              <div class="col-lg-5">
                <div class="form-group left-icon mb-3">
                  <input type="text" class="form-control" name="job_title" placeholder="Mots Clés">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group left-icon mb-3">
                  <input type="text" class="form-control" name="job_title" placeholder="Ville..">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-2 col-sm-12">
                <div class="form-group form-action">
                  <button type="submit" class="btn btn-primary mt-0"><i class="fas fa-search-location"></i>Recherche</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<!--=================================
job-list -->
<section class="space-ptb">
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <!--=================================
      left-sidebar -->
      <div class="sidebar">
        <div class="widget">
          <div class="widget-title widget-collapse">
            <h6>Date</h6>
            <a class="ms-auto" data-bs-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-chevron-down"></i> </a></div>
            <div class="collapse show" id="dateposted">
              <div class="widget-content">
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted1">
                  <label class="form-check-label" for="dateposted1">Plus Rescent</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted2">
                  <label class="form-check-label" for="dateposted2">Depuis 24h</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted3">
                  <label class="form-check-label" for="dateposted3">Depuis 7jrs </label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted4">
                  <label class="form-check-label" for="dateposted4">Depuis 14jrs</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted5">
                  <label class="form-check-label" for="dateposted5">Depuis 30jrs</label>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Catégorie d'emplois</h6>
              <a class="ms-auto" data-bs-toggle="collapse" href="#specialism" role="button" aria-expanded="false" aria-controls="specialism"> <i class="fas fa-chevron-down"></i> </a> </div>
              <div class="collapse show" id="specialism">
                <div class="widget-content">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism1">
                    <label class="form-check-label" for="specialism1">Informatique</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism2">
                    <label class="form-check-label" for="specialism2">Juriste</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism3">
                    <label class="form-check-label" for="specialism3">Medcine</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism4">
                    <label class="form-check-label" for="specialism4">Construction</label>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="specialism5">
                    <label class="form-check-label" for="specialism5">Autres</label>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Type de Contrat</h6>
                <a class="ms-auto" data-bs-toggle="collapse" href="#jobtype" role="button" aria-expanded="false" aria-controls="jobtype"> <i class="fas fa-chevron-down"></i> </a> </div>
                <div class="collapse show" id="jobtype">
                  <div class="widget-content">
                    <div class="form-check fulltime-job">
                      <input type="checkbox" class="form-check-input" id="jobtype1">
                      <label class="form-check-label" for="jobtype1">Plein Temps</label>
                    </div>
                    <div class="form-check parttime-job">
                      <input type="checkbox" class="form-check-input" id="jobtype2">
                      <label class="form-check-label" for="jobtype2">Temps Partial</label>
                    </div>
                    <div class="form-check freelance-job">
                      <input type="checkbox" class="form-check-input" id="jobtype3">
                      <label class="form-check-label" for="jobtype3">Freelance</label>
                    </div>
                    <div class="form-check temporary-job">
                      <input type="checkbox" class="form-check-input" id="jobtype4">
                      <label class="form-check-label" for="jobtype4">Intérimaire</label>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="widget">
                <div class="widget-title widget-collapse">
                  <h6>Expériences</h6>
                  <a class="ms-auto" data-bs-toggle="collapse" href="#experience" role="button" aria-expanded="false" aria-controls="experience"> <i class="fas fa-chevron-down"></i> </a> </div>
                  <div class="collapse show" id="experience">
                    <div class="widget-content">
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience1">
                        <label class="form-check-label" for="experience1">Débutant</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience2">
                        <label class="form-check-label" for="experience2"> 1 an</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience3">
                        <label class="form-check-label" for="experience3">2 ans</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience4">
                        <label class="form-check-label" for="experience4">3 ans</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="experience5">
                        <label class="form-check-label" for="experience5">4 ans</label>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="widget">
                  <div class="widget-title widget-collapse">
                    <h6>Salaire</h6>
                    <a class="ms-auto" data-bs-toggle="collapse" href="#Offeredsalary" role="button" aria-expanded="false" aria-controls="Offeredsalary"> <i class="fas fa-chevron-down"></i> </a> </div>
                    <div class="collapse show" id="Offeredsalary">
                      <div class="widget-content">
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary1">
                          <label class="form-check-label" for="Offeredsalary1">10k - 20k</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary2">
                          <label class="form-check-label" for="Offeredsalary2">20k - 30k</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary3">
                          <label class="form-check-label" for="Offeredsalary3">30k - 40k</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary4">
                          <label class="form-check-label" for="Offeredsalary4">40k - 50k</label>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="Offeredsalary5">
                          <label class="form-check-label" for="Offeredsalary5">50k - 60k</label>
                        </div>
                      </div>
                    </div>
                  </div>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <!--=================================
                    right-sidebar -->
                    <div class="row mb-4">
                       <div class="col-md-6">
                        <div class="section-title mb-3 mb-lg-4">
                          <h6 class="mb-0">1-5 / <span class="text-primary">28 Emplois</span></h6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="job-filter-tag">
                        <ul class="list-unstyled">
                          <li><a href="#">depuis 24h<i class="fas fa-times-circle"></i> </a></li>
                          <li><a class="filter-clear" href="#">Recherche<i class="fas fa-redo-alt"></i> </a></li>
                        </ul>
                      </div>
                      </div>
                    </div>
                    <div class="job-filter mb-4 d-sm-flex align-items-center">
                      <div class="job-alert-bt"> <a class="btn btn-md btn-dark" href="#"><i class="fa fa-envelope"></i>Activez une alerte</a> </div>
                      <div class="job-shortby ms-sm-auto d-flex align-items-center">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12">
                        <div class="job-list ">
                          <div class="job-list-logo">
                            <img class="img-fluid" src="images/svg/01.svg" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="#">Emplois 01</a></h5>
                              </div>
                              <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="#">Entreprise</a> </li>
                                  <li><i class="fas fa-map-marker-alt pe-1"></i>Ville</li>
                                  <li><i class="fas fa-filter pe-1"></i>Domaine d'activite</li>
                                  <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>24h</span> </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="job-list">
                          <div class="job-list-logo">
                            <img class="img-fluid" src="images/svg/02.svg" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="#">Emplois 02</a></h5>
                              </div>
                              <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="#">Entreprise</a> </li>
                                  <li><i class="fas fa-map-marker-alt pe-1"></i>Ville</li>
                                  <li><i class="fas fa-filter pe-1"></i>Domaine d'activite</li>
                                  <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3jrs</span> </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="job-list">
                          <div class=" job-list-logo">
                            <img class="img-fluid" src="images/svg/03.svg" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="#">Emplois 03</a></h5>
                              </div>
                              <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="#">Entreprise</a> </li>
                                  <li><i class="fas fa-map-marker-alt pe-1"></i>Ville</li>
                                  <li><i class="fas fa-filter pe-1"></i>Domaine d'activite</li>
                                  <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2 ans</span> </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="job-list">
                          <div class="job-list-logo">
                            <img class="img-fluid" src="images/svg/04.svg" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="#">Emplois 04</a></h5>
                              </div>
                              <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="#">Entreprise</a> </li>
                                  <li><i class="fas fa-map-marker-alt pe-1"></i>Ville</li>
                                  <li><i class="fas fa-filter pe-1"></i>Domaine d'activite</li>
                                  <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3 Mois</span> </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="job-list">
                          <div class="job-list-logo">
                            <img class="img-fluid" src="images/svg/05.svg" alt="">
                          </div>
                          <div class="job-list-details">
                            <div class="job-list-info">
                              <div class="job-list-title">
                                <h5 class="mb-0"><a href="#">Emplois 05</a></h5>
                              </div>
                              <div class="job-list-option">
                                <ul class="list-unstyled">
                                  <li> <span>via</span> <a href="#">Entreprise</a> </li>
                                  <li><i class="fas fa-map-marker-alt pe-1"></i>Ville</li>
                                  <li><i class="fas fa-filter pe-1"></i>Domaine d'activite</li>
                                  <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                          <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>6 jrs</span> </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-12 text-center mt-4 mt-md-5">
                        <ul class="pagination justify-content-center mb-0">
                          <li class="page-item disabled"> <span class="page-link b-radius-none">Prec</span> </li>
                          <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">...</a></li>
                          <li class="page-item"><a class="page-link" href="#">25</a></li>
                          <li class="page-item"> <a class="page-link" href="#">Suiv</a> </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</section>
<!--=================================
job-list -->

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
              <form class="mt-4">
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">User* :</label>
                    <input type="text" class="form-control" id="Email22">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Mot de Passe *</label>
                    <input type="password" class="form-control" id="password32">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-grid" href="#">Connexion</a>
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
              <form class="mt-4">
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">User * :</label>
                    <input type="text" class="form-control" id="Email2">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Mot de Passe *</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-grid" href="#">Connexion</a>
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
</div><div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="mb-0 text-center">Login to Your Account</h4>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="login-register">
          <fieldset>
            <legend class="px-2">Choose your Account Type</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item me-4">
                <a class="nav-link active"  data-bs-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Candidate</h6>
                      <p class="mb-0">Log in as Candidate</p>
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
                      <h6 class="mb-0">Employer</h6>
                      <p class="mb-0">Log in as Employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4">
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email22">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Password*</label>
                    <input type="password" class="form-control" id="password32">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-grid" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0 forgot-pass">
                      <a href="#">Forgot Password?</a>
                      <p class="mt-1">Don't have account? <a href="register.html">Sign Up here</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4">
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email2">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Password*</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-grid" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0">
                      <a href="#">Forgot Password?</a>
                      <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="Remember-02">
                        <label class="form-check-label" for="Remember-02">Remember Password</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-4">
            <fieldset>
              <legend class="px-2">Login or Sign up with</legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f me-3 me-md-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter me-3 me-md-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google me-3 me-md-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in me-3 me-md-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
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

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/select2/select2.full.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>
</html>
