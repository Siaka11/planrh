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
              <li><a href="../backend_candidat/modification_pass" class="active"> Modifier Mon Pass</a></li>
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
Change Password -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4">
            <h4>Modifier votre mot de passe</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <form method="POST" class="row">
                <div class="form-group col-md-12 mb-3">
                  <label class="form-label">Mot de passe actuel</label>
                  <input type="password" name="password_old" class="form-control" value="" >
                </div>
                <div class="form-group col-md-12 mb-3">
                  <label class="form-label">Nouveau mot de passe</label>
                  <input type="password" name="password_new1" class="form-control" value="">
                </div>
                <div class="form-group col-md-12 mb-0">
                  <label class="form-label">Confirmez le nouveau mot de passe</label>
                  <input type="password" name="password_new2" class="form-control" value="">
                </div>
                <div class="col-md-6"> 
                    <button class="btn btn-primary d-grid" name="modifierpassword" >Modifier</button>
                  </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!--=================================
Change Password -->
