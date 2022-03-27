
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF GENERATOR</title>
    
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
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
</head>
<body>
<?= $contenu ?>

<script>
        function generatePDF(){
            //nom du fichier | file name
           // var nom_fichier = prompt("Nom du fichier PDF :");
            //generer le pdf
            var element = document.querySelector("body")
            var opt = {
                    margin:  1,
                    filename:     "ange.pdf",
                    image:        { type: 'jpeg', quality: 1 },
                    html2canvas:  { scale: 1 },
                    jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' },
                    
                };
           
                html2pdf().set(opt).from(element).save()
            
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

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/index-03.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Dec 2021 14:35:27 GMT -->
</html>
