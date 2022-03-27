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
                  <input type="text" name="pass" class="form-control" value="" >
                </div>
                <div class="form-group col-md-12 mb-3">
                  <label class="form-label">Nouveau mot de passe</label>
                  <input type="password" name="password1" class="form-control" value="">
                </div>
                <div class="form-group col-md-12 mb-0">
                  <label class="form-label">Confirmez le nouveau mot de passe</label>
                  <input type="password" name="password2" class="form-control" value="">
                </div>
                <div class="col-md-6"> 
                    <button class="btn btn-primary d-grid" name="send" >Modifier</button>
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
