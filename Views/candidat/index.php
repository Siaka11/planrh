
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
              <li><a class="active" href="../backend_candidat/">Accueil</a></li>
              <li><a href="../backend_candidat/profil">Mon Profil</a></li>
              <li><a href="../backend_candidat/modification_pass">Modifier Mon Pass</a></li>
              <li><a href="../backend_candidat/imprimer" target="_blank">Mon CV</a></li>
              <li><a href="../backend_candidat/modification_cv">Modifier Mon CV</a></li>
              <li><a href="../backend_candidat/liste_emplois">Emplois</a></li>
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
                  <h3 class="mb-0 text-white"><?= $toutes_offres_postulees ?></h3>
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
                  <h3 class="mb-0 text-white"><?= $tous_les_candidatures_acceptees ?></h3>
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
                  <h3 class="mb-0 text-white"><?= $tous_les_candidatures_refusees ?></h3>
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
            <?php $i = 0 ?>
            <?php foreach($recupere_tous_offres as $recupere_tous_offre): ?>
              <?php $i++; ?>
              <div class="col-12">
                <div class="job-list ">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="../images/<?= $recupere_tous_offre->employeur_image ?>" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="#">Emploi <?= $i ?></a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li> <span>via</span> <a href="#"><?= $recupere_tous_offre->employeur_entreprise ?></a> </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i><?= $recupere_tous_offre->adresse ?></li>
                          <li><i class="fas fa-filter pe-1"></i><?= $recupere_tous_offre->domaine_nom ?></li>
                          <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i><?= $recupere_tous_offre->typeemploi_nom ?></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <?php  $date = $util->mydateago("$recupere_tous_offre->offre_date_creation"); ?>
                  <div class="job-list-favourite-time"> <a class="mb-3 d-block order-2" href="/main/offre/<?= $recupere_tous_offre->offre_id ?>">Postuler</a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i><?= $date ?></span> </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="row">
            <div class="col-12 text-center mt-4 mt-md-5">
              <ul class="pagination justify-content-center mb-md-4 mb-0">

                  <?php if($page_courante == 1): ?>
                        <li class="page-item disabled"> <span class="page-link b-radius-none">Précédent</span> </li>
                  <?php else: ?>
                    <li class="page-item "> <a class="page-link" href="/backend_candidat/page/<?= $page_courante - 1 ?>">Précédent</a> </li>
                  <?php endif ?>

                  <?php for($i = 1; $i <= $page_totale; $i++): ?> 

                  <?php if($i == $page_courante): ?>
                    <li class="page-item active" aria-current="page"><span class="page-link"><?= $i ?> </span> <span class="sr-only">(current)</span></li>
                  <?php else: ?>
                    <li class="page-item"><a class="page-link" href="/backend_candidat/page/<?= $i ?>"><?= $i ?></a></li>
                  <?php endif ?>
   
                  <?php endfor; ?>

                  <?php if($page_courante == $page_totale): ?>
                        <li class="page-item disabled"> <span class="page-link b-radius-none">Suivant</span> </li>
                  <?php else: ?>
                    <li class="page-item "> <a class="page-link" href="/backend_candidat/page/<?= $page_courante + 1 ?>">Suivant</a> </li>
                  <?php endif ?>
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