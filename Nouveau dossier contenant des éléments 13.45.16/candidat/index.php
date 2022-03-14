<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Plan Rh" />
    <meta name="description" content="Site de recrutement et de placement" />
    <meta name="author" content="Ange Brou" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Accueil | Tableau de Bord</title>

    <!-- Favicon -->
    <link href="../images/log.png" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="../css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="../css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" />

    <!-- map -->
    <link rel="stylesheet" href="../css/apexcharts/apexcharts.css" />

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
              <li><a class="active" href="index.php">Accueil</a></li>
              <li><a href="backend-candidat-profil.php">Mon Profil</a></li>
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
Candidates Dashboard -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="row mb-3 mb-lg-5 mt-3 mt-lg-0">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="candidates-feature-info bg-dark">
                <div class="candidates-info-icon text-white">
                  <i class="fas fa-globe-asia"></i>
                </div>
                <div class="candidates-info-content">
                 <h6 class="candidates-info-title text-white">Total Candidature</h6>
                </div>
                <div class="candidates-info-count">
                  <h3 class="mb-0 text-white">01</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="candidates-feature-info bg-success">
                <div class="candidates-info-icon text-white">
                  <i class="fas fa-thumbs-up"></i>
                </div>
                <div class="candidates-info-content">
                 <h6 class="candidates-info-title text-white">Candidature Acceptées</h6>
                </div>
                <div class="candidates-info-count">
                  <h3 class="mb-0 text-white">00</h3>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="candidates-feature-info bg-danger">
                <div class="candidates-info-icon text-white">
                  <i class="fas fa-thumbs-down"></i>
                </div>
                <div class="candidates-info-content">
                 <h6 class="candidates-info-title text-white">Candidature rejetées</h6>
                </div>
                <div class="candidates-info-count">
                  <h3 class="mb-0 text-white">00</h3>
                </div>
              </div>
            </div>
          </div>
        <div class="user-dashboard-info-box">
          <div id="chart">
          </div>
        </div>
        <div class="user-dashboard-info-box mb-0 pb-4">
          <div class="section-title">
            <h4>Emplois Récents</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="job-list ">
                <div class="job-list-logo">
                  <img class="img-fluid" src="../images/svg/01.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="#">Emploi 01</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="#">Entreprise</a> </li>
                        <li><i class="fas fa-map-marker-alt pe-1"></i>Lieu du Poste</li>
                        <li><i class="fas fa-filter pe-1"></i>Domaine</li>
                        <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="mb-3 d-block order-2" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1Mois</span> </div>
              </div>
            </div>
            <div class="col-12">
              <div class="job-list">
                <div class="job-list-logo">
                  <img class="img-fluid" src="../images/svg/02.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="#">Emploi 02</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="#">Entreprise</a> </li>
                        <li><i class="fas fa-map-marker-alt pe-1"></i>Lieu du poste</li>
                        <li><i class="fas fa-filter pe-1"></i>Domaine</li>
                        <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="mb-3 d-block order-2" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3sem</span> </div>
              </div>
            </div>
            <div class="col-12">
              <div class="job-list">
                <div class=" job-list-logo">
                  <img class="img-fluid" src="../images/svg/03.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="#">Emploi 03</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="#">Entreprise</a> </li>
                        <li><i class="fas fa-map-marker-alt pe-1"></i>Lieu du poste</li>
                        <li><i class="fas fa-filter pe-1"></i>Domeine</li>
                        <li><a class="temporary" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="mb-3 d-block order-2" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2h</span> </div>
              </div>
            </div>
            <div class="col-12">
              <div class="job-list">
                <div class="job-list-logo">
                  <img class="img-fluid" src="../images/svg/04.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="#">Emploi 04</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="#">Entreprise</a> </li>
                        <li><i class="fas fa-map-marker-alt pe-1"></i>Lieu du poste</li>
                        <li><i class="fas fa-filter pe-1"></i>Domaine</li>
                        <li><a class="full-time" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="mb-3 d-block order-2" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3jrs</span> </div>
              </div>
            </div>
            <div class="col-12">
              <div class="job-list">
                <div class="job-list-logo">
                  <img class="img-fluid" src="../images/svg/05.svg" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="#">Emplois 05</a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via</span> <a href="#">Entreprise</a> </li>
                        <li><i class="fas fa-map-marker-alt pe-1"></i>Entreprise</li>
                        <li><i class="fas fa-filter pe-1"></i>Domaine</li>
                        <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>Type de contrat</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="job-list-favourite-time"> <a class="mb-3 d-block order-2" href="#"><i class="far fa-edit"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>6h</span> </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 text-center mt-4 mt-md-5">
              <ul class="pagination justify-content-center mb-md-4 mb-0">
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
  </div>
</section>
<!--=================================
Change Password -->

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
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/popper/popper.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>

    <!-- map -->
    <script src="../js/apexcharts/apexcharts.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="../js/custom.js"></script>

    <script>
        var options = {
            chart: {
                height: 350,
                type: 'area',
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                name: 'Candidatures',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'Candidatures Acceptées',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],
            colors: ['#ff8a00', '#001935'],

            xaxis: {
                type: 'datetime',
                categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00", "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00", "2018-09-19T06:30:00"],
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart"),
            options
        );

        chart.render();
    </script>

</body>

</html>
