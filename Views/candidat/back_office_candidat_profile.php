

<!--=================================
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="candidates-user-info">
        <div class="jobber-user-info">
            <div class="profile-avatar">
            <img class="img-fluid"  src="../images/<?= $candidat->image ?>" style=" width: 100px;height: 100px;border-radius: 50%;" alt="" data-bs-target="#staticBackdrop">
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
              <li><a href="../backend_candidat/profil" class="active">Mon Profil</a></li>
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
My Profile -->
<section>
  
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-2 d-grid">
            <h4>Informations</h4>
          </div>
          <form method="POST">
         

            <div class="row">
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Name</label>
                <input type="text" name="nom" class="form-control" value="<?=$can->nom?>">
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?=$can->email?>">
              </div>
              <div class="form-group mb-3 col-md-6 datetimepickers">
                <label class="form-label">Date de Naissance</label>
                <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                  <input type="date" name="datenaissance" class="form-control datetimepicker-input" value="<?=$can->datenaissance?>" data-target="#datetimepicker-01">
                  <!-- <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div> -->
                </div>
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Contact</label>
                <input type="text" name="contact" class="form-control" value="<?=$can->contact?>">
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="d-block mb-3">Genre</label>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genre" value="homme"  id="customRadio1" 
                    <?php 
                    if($can->genre == "homme")
                     {
                       ?>
                       checked="checked"
                       <?php
                      }
                    
                    ?>
                    >
                    <label class="form-check-label" for="customRadio1">Homme</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="genre" value="femme" id="customRadio2"
                    <?php 
                    if($can->genre == "femme")
                     {
                       ?>
                       checked="checked"
                       <?php
                      }
                    
                    ?>
                    
                    >
                    <label class="form-check-label" for="customRadio2">Femme</label>
                  </div>
              </div>
              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Intitulé du Poste</label>
                <input type="text" name="poste" class="form-control" value="Informatique">
              </div>
              <div class="form-group mb-3 col-md-6 select-border">
                <label class="form-label">Domaine</label>
                <select name="domaine" class="form-control basic-select">
                  <?php foreach($domaine as $domaineone): ?>
                    <!-- <option value="value 01" selected="selected">Domaine 01</option> -->
                    <option value="<?=$domaineone->nom?>"><?=$domaineone->nom?></option>
                    
                  <?php endforeach; ?>
                </select>
              </div>

              <div class="form-group mb-3 col-md-6">
                <label class="form-label">Salaire</label>
                <input type="text" name="salaire" class="form-control" value="<?=$can->salaire?>">
              </div>
              <div class="form-group mb-0 col-md-12">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="5" ><?=$can->description ?></textarea>
              </div>
            </div>
          
            </div>
            <div class="user-dashboard-info-box">
              <div class="section-title-02 mb-3">
                <h4>Lien Réseau Sociaux</h4>
              </div>
            
                <div class="row">
                  <div class="form-group mb-3 col-md-6">
                    <label class="form-label">Facebook</label>
                    <input type="text" name="facebook" class="form-control" value="https://www.facebook.com/">
                  </div>
                  <div class="form-group mb-3 col-md-6">
                    <label class="form-label">Twitter</label>
                    <input type="text" name="twitter" class="form-control" value="https://www.twitter.com/">
                  </div>
                  <div class="form-group mb-0 col-md-12">
                    <label class="form-label">Linkedin</label>
                    <input type="text" name="linkedin" class="form-control" value="https://www.linkedin.com/">
                  </div>
                </div>
              
            </div>
             <button class="btn btn-md btn-primary" name="updatecandidat" > Enregistrez</button>
        
          </form>
        </div>
    </div>
  </div>
</section>
<!--=================================
My Profile -->
