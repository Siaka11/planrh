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
            <a class="btn btn-dark" href="/backend_candidat/modification_cv/#competence">Ajoutez une compétence</a>
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
              <li><a  href="../backend_candidat/">Accueil</a></li>
              <li><a href="../backend_candidat/profil">Mon Profil</a></li>
              <li><a href="../backend_candidat/modification_pass">Modifier Mon Pass</a></li>
              <li><a href="../backend_candidat/imprimer" target="_blank">Mon CV</a></li>
              <li><a href="../backend_candidat/modification_cv">Modifier Mon CV</a></li>
              <li><a href="../backend_candidat/liste_emplois" class="active">Emplois</a></li>
              <li><a href="../backend_candidat/emplois_enregistres">Emploi Enregistré</a></li>
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

<!--=================================
Manage Jobs -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box mb-0">
          <div class="row mb-4">
            <div class="col-md-7 col-sm-5 d-flex align-items-center">
              <div class="section-title-02 mb-0 ">
                <h4 class="mb-0">Gestion des candatures</h4>
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
                  <th scope="col">Titre de l'emploi</th>
                  <th scope="col">Statut</th>
                  <!-- <th scope="col">Appreciation</th> -->
                  <!-- <th scope="col">Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php $i = 0 ?>
                <?php foreach($candidat_offres as $candidat_offre) : ?>
                  <?php $i++ ?>
                <tr>
                  <td scope="row"> <b class="text-dark"><?=  $candidat_offre->offre_titre ?>  </b> 
                    <p class="mb-1 mt-2">Expire le : <?= $candidat_offre->date_expiration ?></p>
                    <p class="mb-0">Entreprise : <?= $candidat_offre->employeur_entreprise ?></p>
                  </td>
                  <td>
                      <?php if($candidat_offre->acceptation == 1): ?>
                        <b class="text-danger">Candidature refusée</b>
                      <?php elseif($candidat_offre->acceptation == 2): ?>
                        <b class="text-success">Candidature acceptée</b>
                      <?php else: ?>
                        <b class="text-primary">En attente</b>
                      <?php endif ?>
                  </td>
                  <!-- <td><i class="far fa-star"></i></td> -->
                  <!-- <td>
                    <ul class="list-unstyled mb-0 d-flex">
                      <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="Afficher"><i class="far fa-eye"></i></a></li>
                      <li><a href="#" class="text-danger" data-bs-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a></li>
                    </ul>
                  </td> -->
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
