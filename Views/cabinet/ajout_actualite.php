

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
              <li><a  href="/cabinet/">Accueil</a></li>
              <!-- <li><a href="../cabinet/profil">Mon Profil</a></li> -->
              <!-- <li><a href="../cabinet/modification_pass">Modifier mon passe</a></li> -->
              <li><a href="../cabinet/offres">Offres</a></li>
              <li><a href="../cabinet/emplois_postules">Emplois postulés</a></li>
              <li><a href="../cabinet/employeurs">Employeurs</a></li>
              <li><a href="../cabinet/candidats">Candidats</a></li>
              <li><a href="../cabinet/formations">Formations</a></li>
              <li><a class="active" href="../cabinet/actualites">Actualités</a></li>
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
My Profile -->
<section>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-2 d-grid">
            <h4>Actualité</h4>
          </div>
          <form method="POST" enctype="multipart/form-data">
          
            <div class="row">
              <div class="form-group mb-3 col-md-12">
                <label class="form-label">Image</label>
                <input type='file' name='avatar'id='file' class='form-control' ><br>
              </div>

              <div class="form-group mb-3 col-md-12">
                <label class="form-label">Titre</label>
                <input type="text" name="titre" class="form-control" >
              </div>
              <div class="form-group mb-0 col-md-12">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="5" ></textarea>
              </div>
            </div>
          
            </div>
             <button class="btn btn-md btn-primary" name="ajout_formation" > Ajouter une nouvelle actualité</button>
        
          </form>
        </div>
    </div>
  </div>
</section>
<!--=================================
My Profile -->
