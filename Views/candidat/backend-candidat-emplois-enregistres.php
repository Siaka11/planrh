<!--=================================
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="candidates-user-info">
        <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid "  src="../images/<?= $candidat->image ?>" style=" width: 100px;height: 100px;border-radius: 50%;" alt="" data-bs-target="#staticBackdrop">
                <i class="fas fa-pencil-alt" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
            </div>
            <div class="profile-avatar-info ms-4">
              <h3><?= $candidat->nom ?></h3>
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
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="candidates-skills">
          <div class="candidates-skills-info">
            <!-- <a class="btn btn-dark" href="/backend_candidat/modification_cv/#competence">Retour sur le site planrh</a> -->
          </div>
          <div class="candidates-required-skills ms-auto mt-sm-0 mt-3 end-0">
            <a class="btn btn-dark" href="/">Retour au site planrh</a>
            <!-- <a class="btn btn-dark" href="/backend_candidat/modification_cv/#competence">Ajoutez une compétence</a> -->
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
              <li><a  href="../backend_candidat/">Accueil</a></li>
              <li><a href="../backend_candidat/profil">Mon Profil</a></li>
              <li><a href="../backend_candidat/modification_pass">Modifier Mon Pass</a></li>
              <li><a href="../backend_candidat/imprimer" target="_blank">Mon CV</a></li>
              <li><a href="../backend_candidat/modification_cv">Modifier Mon CV</a></li>
              <li><a href="../backend_candidat/liste_emplois">Emplois</a></li>
              <li><a href="../backend_candidat/emplois_enregistres" class="active">Emploi Enregistré</a></li>
              <li><a href="../backend_candidat/quitter">Quitter</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Dashboard Nav -->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box mb-0 pb-4">
          <div class="row mb-4">
              <div class="col-md-7 col-sm-5 d-flex align-items-center">
                <div class="section-title-02 mb-0 ">
                  <h4 class="mb-0">Emplois Enregistrés</h4>
                </div>
              </div>
              <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
                <div class="search">
                  <!-- <i class="fas fa-search"></i> -->
                  <input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Recherche....">
                </div>
              </div>
            </div>
          <div class="row">
          <!-- <table id="myTable" class="col-12">
            <div class="job-list ">
              <div class="job-list-logo">
                <img class="img-fluid" src="../images/svg/01.svg" alt="">
              </div>
              <div class="job-list-details">
                <div class="job-list-info recherche_tr">
                  <div class="job-list-title">
                    <h5 class="recherche_td" class="mb-0"><a href="#"><?=$candidat_aime->offre_titre?></a></h5>
                  </div>
                  <div class="job-list-option">
                    <ul class="list-unstyled">
                      <li class="recherche_td"> <span>via</span> <a href="#"> <?= $candidat_aime->entreprise ?></a> </li>
                      <li class="recherche_td"><i class="fas fa-map-marker-alt pe-1"><?=$candidat_aime->adresse?></i></li>
                      <li class="recherche_td"><i class="fas fa-filter pe-1"></i><?=$candidat_aime->typeemploi_nom?></li>
                      <li class="recherche_td"><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i><?=$candidat_aime->domaine_nom ?></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="/main/offre/<?= $candidat_aime->offre_id?>"><i class="fas fa-heart text-danger"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i><?=$candidat_aime->date_creat?></span> </div>
            </div>
          </div>          
          </table> -->
          <table class="table table-bordered" id="myTable">
              <thead class="bg-light">
                <tr >
                  <th scope="col">Titre de l'emploi</th>
                  <th scope="col">Emplois aimés</th>
                  <!-- <th scope="col">Appreciation</th> -->
                  <!-- <th scope="col">Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php foreach($candidat_aimes as $candidat_aime): ?>
                <tr>
                  <td scope="row"> <b class="text-dark"><?=  $candidat_aime->offre_titre ?>  </b> 
                    <p class="mb-1 mt-2 text-muted "><i class="far fa-clock pe-1"></i>Expire le : <?= $candidat_aime->date_expiration ?></p>
                    <p class="mb-1 mt-2 text-muted " ><?=$candidat_aime->adresse?></p>
                    <p class="mb-1 mt-2 text-muted "><i class="fas fa-filter pe-1"></i><?=$candidat_aime->typeemploi_nom?></li></p>
                    <p class="mb-0 text-muted "><i class="fas fa-suitcase pe-1"></i>Entreprise : <?= $candidat_aime->employeur_entreprise ?></p>
                  </td>
                  <td>
                    <div class="job-list-favourite-time"> <a class="job-list-favourite order-2" href="/main/offre/<?= $candidat_aime->offre_id?>"><i class="fas fa-heart text-danger"></i></a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i><?=$candidat_aime->date_creat?></span> </div>

                  </td>
                </tr>
                <?php endforeach; ?>
               </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</section>

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
