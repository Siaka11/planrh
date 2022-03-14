<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Plan Rh" />
    <meta name="description" content="Site de recrutement et de placement" />
    <meta name="author" content="Ange Brou" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mon Profil | Plan RH</title>

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
      <div class="col-lg-6">
        <div class="candidates-user-info">
          <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid " src="../images/avatar/06.jpg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ms-4">
              <h3>Ange Brou</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width:85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
            <span class="progress-bar-number">85%</span>
          </div>
        </div>
        <div class="candidates-skills">
          <div class="candidates-skills-info">
            <h3 class="text-primary">85%</h3>
          </div>
          <div class="candidates-required-skills ms-auto mt-sm-0 mt-3">
            <a class="btn btn-dark" href="#">Ajoutez une compétence</a>
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
            <ul class="list-unstyled mb-0">
              <li><a href="index.php">Accueil</a></li>
              <li><a class="active" href="backend-candidat-profil.php">Mon Profil</a></li>
              <li><a href="backend-candidat-modification-pass.php">Modifier Mon Pass</a></li>
              <li><a href="backend-candidat-cv.php" target="_blank">Mon CV</a></li>
              <li><a href="backend-candidat-modification-cv.php">Modifier Mon CV</a></li>
              <li><a href="backend-liste-emplois.php">Emplois</a></li>
              <li><a href="backend-candidat-emplois-enregistres.php">Emploi Enregistré</a></li>
              <li><a href="../login.php">Quitter</a></li>
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
          <div class="section-title-02 mb-2 d-grid">
            <h4>Informations</h4>
          </div>
          <form>
            <div class="row">
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" value="Ange Brou">
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="angetbrou@gmail.com">
              </div>
              <div class="form-group mb-3 col-md-6 datetimepickers">
                <label class="form-label">Date de Naissance</label>
                <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" value="17/01/2022" data-target="#datetimepicker-01">
                  <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div>
                </div>
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Contact</label>
                <input type="text" class="form-control" value="+225 0747306382">
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="d-block mb-3">Genre</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="customRadio" id="customRadio1" checked="checked">
                    <label class="form-check-label" for="customRadio1">Homme</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="customRadio" id="customRadio2">
                    <label class="form-check-label" for="customRadio2">Femme</label>
                  </div>
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Intitulé du Poste</label>
                <input type="text" class="form-control" value="Informatique">
              </div>
              <div class="form-group mb-3 col-md-6 select-border">
                <label class="form-label">Domaine</label>
                <select class="form-control basic-select">
                  <option value="value 01" selected="selected">Domaine 01</option>
                  <option value="value 02">Domaine 02</option>
                  <option value="value 03">Domaine 03</option>
                </select>
              </div>

              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Salaire</label>
                <input type="text" class="form-control" value="$50,000">
              </div>
              <div class="form-group mb-0 col-md-12">
                <label class="form-label">Description</label>
                <textarea class="form-control" rows="5" placeholder="descrisption."></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-3">
            <h4>Lien Réseau Sociaux</h4>
          </div>
          <form>
            <div class="row">
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Facebook</label>
                <input type="text" class="form-control" value="https://www.facebook.com/">
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Twitter</label>
                <input type="email" class="form-control" value="https://www.twitter.com/">
              </div>
              <div class="form-group mb-0 col-md-12">
                <label class="form-label">Linkedin</label>
                <input type="text" class="form-control" value="https://www.linkedin.com/">
              </div>
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
