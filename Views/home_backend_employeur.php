<!DOCTYPE html>
<html lang="fr">

<head>
    <base href="/planrh/">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

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
            <img class="img-fluid "  src="../images/<?= $employeur->image ?>" style=" width: 100px;height: 100px;border-radius: 50%;" alt="" data-bs-target="#staticBackdrop">
              <i class="fas fa-pencil-alt" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
            </div>
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Prendre une image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form method='post' action='' enctype="multipart/form-data">
                    Selectionnez une image : 
                    <input type='file' name='avatar'id='file' class='form-control' ><br>
                    <input type='submit' class='btn btn-info' value='Charger' name="charger" id='btn_upload'>
                  </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="profile-avatar-info ms-4">
              <h3><?= $employeur->entreprise ?></h3>
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
              <li><a class="active" href="../backend_employeur/">Accueil</a></li>
              <li><a href="../backend_employeur/profil">Mon Profil</a></li>
              <li><a href="../backend_employeur/modification_pass">Modifier mon passe</a></li>
              <li><a href="../backend_employeur/gestion_candidats">Gestion Candidat</a></li>
              <li><a href="../backend_employeur/liste_offres">Liste des Offres</a></li>
              <li><a href="../backend_employeur/poster_emplois">Publier une Offre</a></li>
              <li><a href="../backend_employeur/honoraire">Tarifs Plan RH</a></li>
              <li><a href="../main/logout">Quitté</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Dashboard Nav -->

<?php if(!empty($_SESSION['message'])): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  
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
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
<!--=================================
Back To Top-->

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
                name: 'Candidats',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'Nombre offre',
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

        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            console.log(table);

            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
              td = tr[i].getElementsByTagName("td")[0];
              if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  tr[i].style.display = "";
                } else {
                  tr[i].style.display = "none";
                }
              }       
            }
          }
    </script>




</body>

</html>
