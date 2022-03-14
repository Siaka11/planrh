<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Plan Rh" />
    <meta name="description" content="Site de recrutement et de placement" />
    <meta name="author" content="Ange Brou" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Poster Un Emploi </title>


    <!-- Favicon -->
   <link href="../images/log.png" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="../css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="../css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="../css/datetimepicker/datetimepicker.min.css" />
    <link rel="stylesheet" href="../css/select2/select2.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="../css/style.css" />

</head>

<body>

<!--=================================
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid " src="../images/employeur/logo.jpg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ms-4">
                <h3>Orientation Canada Multi-visas</h3>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Dashboard Nav -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sticky-top secondary-menu-sticky-top">
          <div class="secondary-menu">
            <ul>
              <li><a href="index.php">Accueil</a></li>
              <li><a href="backend-employeur-profil.php">Mon Profil</a></li>
              <li><a href="backend-employeur-change-pass.php">Modifier mon passe</a></li>
              <li><a href="backend-employeur-gestion-candidats.php">Gestion Candidat</a></li>
              <li><a href="backend-employeur-liste-offres.php">Liste des Offres</a></li>
              <li><a class="active" href="backend-poster-emplois.php">Publier une Offre</a></li>
              <li><a href="backend-honoraire.php">Tarifs Plan RH</a></li>
              <li><a href="../login.php">Quitté</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Dashboard Nav -->

<!--=================================
Post New Job -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4 d-inline-block">
            <h4>Publier un emploi</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <form class="row">
                <div class="form-group mt-0 mb-3 col-md-12">
                  <label class="form-label">Titre de l'emploi</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group mt-0 mb-3 col-md-12">
                  <label class="form-label">Description de l'emploi</label>
                  <textarea class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 datetimepickers">
                <label class="form-label">Date d'expiration de l'emploi</label>
                <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-01">
                  <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div>
                </div>
              </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Type d'emploi</label>
                  <select class="form-control basic-select">
                    <option value="value 01" selected="selected">Type 01</option>
                    <option value="value 02">Type 02</option>
                    <option value="value 03">Type 03</option>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Secteur d'emploi</label>
                  <select class="form-control basic-select">
                    <option value="value 01" selected="selected">Domaine 01</option>
                    <option value="value 02">Domaine 02</option>
                    <option value="value 03">Domaine 03</option>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Type de demande</label>
                  <select class="form-control basic-select">
                    <option value="value 01" selected="selected">Externe</option>
                    <option value="value 02">Ressources humaines</option>
                    <option value="value 03">Informatique</option>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Type de salire</label>
                  <select class="form-control basic-select">
                    <option value="value 02">Annuel</option>
                    <option value="value 01">Mensuel</option>
                    <option value="value 01">Horraire</option>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6">
                  <label class="form-label">Salaire Min</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group mt-0 col-md-6 mb-3 mb-md-0">
                  <label class="form-label">Salaire Max</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group mt-0 col-md-6 mb-0">
                  <label class="form-label">Compétence Professionnelle</label>
                  <input type="text" class="form-control" value="">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="user-dashboard-info-box">
          <form>
            <div class="row">
              <div class="col-12">
                <h4 class="mb-3">Pièce Jointe</h4>
                <div class="upload-file mb-0">
                  <label for="formFile" class="form-label">Uploader un fichier</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="user-dashboard-info-box">
          <div class="form-group mb-0">
            <h4 class="mb-4">Lieu de, l'emploi</h4>
            <div class="form-group mb-3">
              <label class="form-label">Entrez votre Adresse</label>
              <input type="text" class="form-control" value="" placeholder="Entrez votre Adresse">
            </div>
            <div class="company-address-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15888.330386693791!2d-3.9894956!3d5.4043882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf06c43c49b7720e7!2sOrientation%20Canada%20Multi-visas!5e0!3m2!1sfr!2sci!4v1642435304629!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
        <a class="btn btn-lg btn-primary" href="#">Soumettre</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Post New Job -->

<!--=================================
footer -->
<footer class="footer mt-5 mt-md-5 pt-0">
    <div class="footer-bottom bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="d-flex justify-content-md-start justify-content-center">
              <ul class="list-unstyled d-flex mb-0">
                <li><a href="#">FAQ</a></li>
                <li><a href="../#">A propos de nous</a></li>
                <li><a href="../contact.html">Contact</a></li>
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
footer -->

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
   <script src="js/datetimepicker/moment.min.js"></script>
    <script src="js/datetimepicker/datetimepicker.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/dashboard-employer-post-new-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 14:35:45 GMT -->
</html>
