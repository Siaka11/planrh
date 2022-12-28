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
    <link href="../../images/log.png" rel="shortcut icon" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="../css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="../css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" />

    <!-- map -->
    <link rel="stylesheet" href="../css/apexcharts/apexcharts.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <link rel="stylesheet" href="../css/style.css" />

</head>
<style>
  
</style>

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

     <!-- Add button -->

     <script type="text/javascript">
        // add row
        $("#add_more_fields").click(function () {
            var html = '';
            html += '<form class="row align-items-center"id="formremove"  method="POST">';
            html += '<div  class="form-group mb-3 col-md-6">';
            html += '<label class="form-label">Titre</label>';
            html += '<input type="text" name="titre" class="form-control" value="">';
            html += '</div>';
            html += '<div class="form-group mb-3 col-md-5">'
            html +=  '<label class="form-label">Pourcentage</label>'
            html +=  '<input type="text" name="pourcentage"  class="form-control" value="">'
            html +=  '</div>'
            html +=  '<div  class="form-group mb-3 col-md-1 text-center">'
            html +=  '<a class="mt-3 d-block" id="remove_fields" ><i class="far fa-trash-alt text-danger" ></i></a>'
            html +=  '</div>'
            html +=  '<button class="btn btn-primary d-grid" style="width: 200px" name="send6">Ajouter</button>'
            html +=  '</form>'

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#remove_fields', function () {
            $(this).closest('#formremove').remove();
        });
    </script>
    <script>
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

    function myFunction_custom() {
      console.log('hello')
      var input, filter, table, recherche_tr, recherche_td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();

      table = document.getElementById("myTable");
      console.log(table);

      recherche_tr = table.getElementsByTagName("recherche_tr");
      console.log(recherche_tr.length);
      for (i = 0; i < recherche_tr.length; i++) {
        recherche_td = recherche_tr[i].getElementsByTagName("recherche_td")[0];
        if (recherche_td) {
          txtValue = recherche_td.textContent || recherche_td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            recherche_tr[i].style.display = "";
          } else {
            recherche_tr[i].style.display = "none";
          }
        }       
      }
    }
    </script>
  <!-- <script>
    var survey_options = document.getElementById('link');
    let add_more_fields = document.getElementById('add_more_fields');
    var remove_fields = document.getElementById('remove_fields');

  
      add_more_fields.addEventListener('click', myfunction)

      function myfunction(){
        console.log("Merci")
      }
      add_more_fields.onclick = function(){
        console.log('Merci')

        const d = document.createElement("div")
        d.setAttribute('class', 'collapse show')

        const e = document.createElement("div")
        e.setAttribute('class', 'bg-light p-3 mt-4')
        //e.setAttribute('class', 'bg-red')
        const f = document.createElement("form");
        f.setAttribute('method', "post");
        // f.setAttribute('action', "submit.php");
        f.setAttribute('class', "row align-items-center");

        const v = document.createElement("div");
        //Titre
        v.setAttribute('class', 'form-group mb-3 col-md-6')
        const label = document.createElement("Label");
        label.setAttribute('class', 'form-label')
        label.innerHTML = "Titre"

        const i = document.createElement("input");
        i.setAttribute('type', "text");
        i.setAttribute('name', "titre");
        i.setAttribute('class', "form-control");

        //Pourcentage
        const v1 = document.createElement("div")
        v1.setAttribute('class', 'form-group mb-3 col-md-5')
        const label1 = document.createElement("label")
        label1.setAttribute('class', 'form-label')
        label1.innerHTML = "Pourcentage"

        const i1 = document.createElement("input");
        i1.setAttribute('type', "text");
        i1.setAttribute('name', "pourcentage");
        i1.setAttribute('class', "form-control");

        //delete
        const v2 = document.createElement("div")
        v2.setAttribute('class', 'form-group mb-3 col-md-1 text-center')
        const a = document.createElement("a")
        a.setAttribute('class', "mt-3 d-block")
        a.setAttribute('href', "#")
        a.setAttribute('id', "remove_fields")
        //label1.innerHTML = "Pourcentage"

        const i3 = document.createElement("i");
        i3.setAttribute('class', "far fa-trash-alt text-danger");

        // const s = document.createElement("input");
        // s.setAttribute('type', "submit");
        // s.setAttribute('value', "Submit");

        //d.appendChild(e)
        //e.appendChild(f)
        f.appendChild(v);
        f.appendChild(v1);
        f.appendChild(v2)

        v2.appendChild(a)
        a.appendChild(i3)

        v1.appendChild(label1);
        v1.appendChild(i1);

        v.appendChild(label);
        v.appendChild(i);
        

        survey_options.appendChild(f);
        // var newDiv = document.createElement('div');
        // newDiv.setAttribute('type','text');
        // newDiv.setAttribute('class','collapse show');
        // newDiv1.createElement('class','collapse show')



        
        // var newField = document.createElement('input');
        // newField.setAttribute('type','text');
        // newField.setAttribute('name','survey_options[]');
        // newField.setAttribute('class','survey_options');
        // newField.setAttribute('siz',50);
        // newField.setAttribute('placeholder','Another Field');
        // survey_options.appendChild(newField);
      }

      remove_fields.addEventListener('click', mafunction)

      function mafunction(){
        console.log('merci bro')
      }

      remove_fields.onclick = function(){
        console.log('Merci toi')
      var input_tags = survey_options.getElementsByTagName('input');
      if(input_tags.length > 2) {
        survey_options.removeChild(input_tags[(input_tags.length) - 1]);
      }
    }
  </script> -->

 <!-- End button -->

</body>

</html>
