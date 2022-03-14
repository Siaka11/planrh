<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Plan Rh" />
    <meta name="description" content="Site de recrutement et de placement" />
    <meta name="author" content="Ange Brou" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profil Employeur </title>

    <!-- Favicon -->
     <link href="../images/log.png" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="../css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="../css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/datetimepicker/datetimepicker.min.css" />
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
              <li><a class="active" href="backend-employeur-profil.php">Mon Profil</a></li>
              <li><a href="backend-employeur-change-pass.php">Modifier mon passe</a></li>
              <li><a href="backend-employeur-gestion-candidats.php">Gestion Candidat</a></li>
              <li><a href="backend-employeur-liste-offres.php">Liste des Offres</a></li>
              <li><a href="backend-poster-emplois.php">Publier une Offre</a></li>
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
My Profile -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4">
            <h4>Informations</h4>
          </div>
          <div class="cover-photo-contact">
            <div class="cover-photo">
              <img class="img-fluid " src="../images/bg/cover-bg.png" alt="">
              <i class="fas fa-times-circle"></i>
            </div>
            <div class="upload-file">
              <label for="formFile" class="form-label">Modifiez Couverture</label>
              <input class="form-control" type="file" id="formFile">
            </div>
          </div>
          <form>
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Nom Entreprise</label>
                <input type="text" class="form-control" value="Orientation Canada Multi-visas">
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="inf@orientationcanadamultivisas.com">
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Prénoms </label>
                <input type="text" class="form-control" value="Stephane">
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Nom </label>
                <input type="text" class="form-control" value="Ekpo">
              </div>
              <div class="form-group col-md-6 mb-3 datetimepickers">
                <label class="form-label">Date de création</label>
                <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" value="02/03/2018" data-target="#datetimepicker-01">
                  <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div>
                </div>
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Téléphone</label>
                <input type="text" class="form-control" value="+(1) 000-000">
              </div>
              <div class="form-group col-md-6 mb-3 select-border">
                <label class="form-label">Secteur d'activité</label>
                <select class="form-control basic-select">
                  <option value="value 01" selected="selected">immigration</option>
                  <option value="value 02">Informatique</option>
                  <option value="value 03">Négoce</option>
                </select>
              </div>
              <div class="form-group col-md-6 mb-3 mb-md-0">
                <label class="form-label">Site Web</label>
                <input type="text" class="form-control" value="example.com">
              </div>
              <div class="form-group col-md-12 mb-0">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="5" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi turpis est, convallis eu porttitor ut, venenatis eu magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. P"></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-3">
            <h4>Réseaux Sociaux</h4>
          </div>
          <form>
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Facebook</label>
                <input type="text" class="form-control" value="https://www.facebook.com/">
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Twitter</label>
                <input type="email" class="form-control" value="https://www.twitter.com/">
              </div>
              <div class="form-group col-md-6 mb-0">
                <label class="form-label">Linkedin</label>
                <input type="text" class="form-control" value="https://www.linkedin.com/">
              </div>
              <div class="form-group col-md-6 mb-0">
                <label class="form-label">Youtube</label>
                <input type="text" class="form-control" value="https://www.youtube.com/">
              </div>
            </div>
          </form>
        </div>
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-3">
            <h4>Siège Social</h4>
          </div>
          <form>
            <div class="row">
              <div class="form-group col-md-12 mb-3">
                <label class="form-label">Entrez la location</label>
                <input type="text" class="form-control" value="Orientation Canada Multi-visas, 08 BP 1490 Abidjan 08" placeholder="Enter Your  location">
              </div>
            </div>
            <div class="location-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15888.330386693791!2d-3.9894956!3d5.4043882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf06c43c49b7720e7!2sOrientation%20Canada%20Multi-visas!5e0!3m2!1sfr!2sci!4v1642177997737!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </form>
        </div>
        <a class="btn btn-md btn-primary" href="#">Enregistrez</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
My Profile -->

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
</html>
