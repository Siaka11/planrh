<!--=================================
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="candidates-user-info">
        <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid "  src="../images/<?= $admin->image ?>" style=" width: 100px;height: 100px;border-radius: 50%;" alt="" data-bs-target="#staticBackdrop">
                <i class="fas fa-pencil-alt" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
            </div>
            <div class="profile-avatar-info ms-4">
              <h3><?= $admin->nom ?></h3>
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
              
              <li><a href="/cabinet/">Accueil</a></li>
              <!-- <li><a href="../cabinet/profil">Mon Profil</a></li> -->
              <!-- <li><a href="../cabinet/modification_pass">Modifier mon passe</a></li> -->
              <li><a href="../cabinet/offres">Offres</a></li>
              <li><a href="../cabinet/emplois_postules">Candidatures</a></li>
              <li><a href="../cabinet/employeurs">Employeurs</a></li>
              <li><a href="../cabinet/candidats">Candidats</a></li>
              <li><a href="../cabinet/formations">Formations</a></li>
              <li><a class="active" href="../cabinet/publicites">publicites</a></li>
              <li><a href="../cabinet/actualites">Actualités</a></li>
              <li><a href="../main/logout">Quitter</a></li>

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
Manage Jobs -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box mb-0">
          <div class="row mb-4">
          <a  class="btn btn-primary" href="/cabinet/ajout_publicite">Ajouter une publicite</a>
            <div class="col-md-7 col-sm-5 d-flex align-items-center">
              <div class="section-title-02 mb-0 ">
                <h4 class="mb-0">Liste des publicités</h4>
              </div>
            </div>
            <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
              <div class="search">
                <!-- <i class="fas fa-search"></i> -->
                <input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Recherche....">
              </div>
            </div>
          </div>
          <div class="user-dashboard-table table-responsive">
            <table class="table table-bordered" id="myTable">
              <thead class="bg-light">
                <tr >
                  <th scope="col">Inpublicite sur les publicites</th>
                  <th scope="col">Action</th>

                  <!-- <th scope="col">Appreciation</th> -->
                  <!-- <th scope="col">Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php $i = 0 ?>
                <?php foreach($publicites as $publicite) : ?>
                  <?php $i++ ?>
                <tr>
                  <td scope="row"> <b class="text-dark">
                    <div class="job-list-logo">
                    <img class="img-fluid" src="../images/publicites/<?= $publicite->image ?>" style="width: 50px;height: 50px;border-radius: 50%;" alt="">
                    </div>
                    <p class="mb-1 mt-2"><span class="text-decoration-underline">Titre de la publicite :</span><b> <?= $publicite->titre ?></b></p>
                    

                  </td>
                  <!-- <td><i class="far fa-star"></i></td> -->
                  <td>
                    <ul class="list-unstyled mb-0 d-flex">
                      <li><a href="/cabinet/publicite/<?= $publicite->id ?>" class="text-danger" data-bs-toggle="tooltip" title="Supprimer"><i class="far fa-trash-alt"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <?php endforeach; ?>
               </tbody>
            </table>
          </div>
          <!-- <div class="row justify-content-center">
            <div class="col-12 text-center">
              <ul class="pagination mt-3">
                <li class="page-item disabled me-auto">
                  <span class="page-link b-radius-none">Prec</span>
                </li>
                <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item ms-auto">
                  <a class="page-link" href="#">Suiv</a>
                </li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Manage Jobs -->
