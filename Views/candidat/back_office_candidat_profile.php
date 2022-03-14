

<!--=================================
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="candidates-user-info">
          <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid " src="../images/avatar/06.jpg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ms-4">
              <h3>Ange Brou</h3>
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
              <li><a href="../backend_candidat/mon_cv" target="_blank">Mon CV</a></li>
              <li><a href="../backend_candidat/modification_cv">Modifier Mon CV</a></li>
              <li><a href="../backend_candidat/liste_emplois">Emplois</a></li>
              <li><a href="../backend_candidat/emplois_enregistres">Emploi Enregistré</a></li>
              <li><a href="../login.php">Quitter</a></li>
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
                  <input type="text" name="datenaissance" class="form-control datetimepicker-input" value="<?=$can->datenaissance?>" data-target="#datetimepicker-01">
                  <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div>
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
                <textarea name="description" class="form-control" rows="5" placeholder="descrisption."></textarea>
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
