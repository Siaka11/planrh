<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Plan Rh" />
    <meta name="description" content="Site de recrutement et de placement" />
    <meta name="author" content="Ange Brou" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>1Accueil | Tableau de Bord1</title>

    <!-- Favicon -->
    <link href="../../images/log.png" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="/../../all.min.css" />
    <link rel="stylesheet" href="/../../css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="/../../css/bootstrap/bootstrap.min.css" />

    <!-- map -->
    <link rel="stylesheet" href="../../css/apexcharts/apexcharts.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="../../css/style.css" />

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

<?= $contenu ?>

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
    <script src="../../js/jquery-3.6.0.min.js"></script>
    <script src="../../js/popper/popper.min.js"></script>
    <script src="../../js/bootstrap/bootstrap.min.js"></script>

    <!-- map -->
    <script src="../../js/apexcharts/apexcharts.min.js"></script>

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
