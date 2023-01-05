



<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Créer un compte</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/"> Accueil </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Créer un compte </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Register -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="login-register">
         <div class="section-title">
         </div>
          <fieldset>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item me-4">
                <a class="nav-link active"  data-bs-toggle="tab" href="#candidate" role="tab" >
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Candidat</h6>
                      <p class="mb-0">J'ai crée mon compte.</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item ms-auto">
                <a class="nav-link" data-bs-toggle="tab" href="#employer" role="tab">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Employeur</h6>
                      <p class="mb-0">Je crée mon compte</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4" method= "POST">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="Username">Nom et Prénoms *</label>
                    <input type="text" name="nom" class="form-control">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Email *</label>
                    <input type="text" name="email" class="form-control">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Contact *</label>
                    <input type="text" name="contact" class="form-control">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Date de naissance *</label>
                    <input type="date" name="datenaissance" class="form-control">
                  </div>
                  <div class="mb-3 col-md-12 select-border">
                    <label class="form-label" for="domaine">Domaine</label>
                    <select class="form-control" name="domaine">
                      <?php foreach($domaines as $domaine): ?>
                        <option value="<?= $domaine->nom ?>" ><?= $domaine->nom ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="ville">Poste :</label>
                    <input type="text" name="poste" class="form-control" placeholder="commercial">
                  </div>
                  <div class="mb-3 col-md-12 select-border">
                    <label class="form-label" for="domaine">Genre</label>
                    <select class="form-control" name="genre">
                        <option value="homme" >Homme</option>
                        <option value="femme" >femme</option>
                    </select>
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="ville">Salaire :</label>
                    <input type="text" name="salaire" class="form-control" placeholder="200000">
                  </div>
                  <div class="form-group col-12 mb-0">
                    <label class="form-label" for="domaine">Décrivez-vous</label>
                    <textarea rows="8" name="description" class="form-control" id="message"></textarea>
                  </div>
                  <!-- <div class="mb-3 col-md-12 select-border">
                    <label class="form-label" for="info">Comment recevoir les Informations :</label>
                    <select class="form-control">
                      <option value="value 01" selected="selected">Recvoir les informations</option>
                      <option value="value 02">Email</option>
                      <option value="value 03">SMS</option>
                      <option value="value 04">Appel</option>
                    </select>
                  </div> -->
                  <!-- <div class="mb-3 col-md-12 select-border">
                    <label class="form-label" for="ville">Votre CV :</label>
                    <input type="file" class="custom-file-input">
                  </div> -->
                  <div class="mb-3 col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="Remember-02">
                      <label class="form-check-label" for="Remember-02">
                        J'accepte d'être informé sur les services offerts par Plan RH
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button class="col-md-12 btn btn-primary d-block" type="submit" name="soumette_candidature">Soumettre</a>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4" method="POST">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Nom *</label>
                    <input type="text" name="nom" class="form-control" id="Username">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">email *</label>
                    <input type="email" name="email" class="form-control" id="email">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Entreprise *</label>
                    <input type="text" name="entreprise" class="form-control" id="email">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Téléphone *</label>
                    <input type="text" name="telephone" class="form-control" id="email">
                  </div>
                  <div class="mb-3 col-md-12 select-border">
                    <label class="form-label" for="domaine">Domaine</label>
                    <select class="form-control" name="secteur">
                      <?php foreach($domaines as $domaine): ?>
                        <option value="<?= $domaine->nom ?>" ><?= $domaine->nom ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="mb-3 col-md-12">
                    <label class="form-label" for="password2">Siège *</label>
                    <input type="text" name="siege" class="form-control" id="password2">
                  </div>
                  <div class="form-group col-12 mb-0">
                    <label class="form-label" for="domaine">A propos de votre structure</label>
                    <textarea rows="8" name="description" class="form-control" id="message"></textarea>
                  </div>
                  <div class="mb-3 col-12 mt-3">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="accepts-02">
                      <label class="form-check-label" for="accepts-02">
                        J'accepte d'être informé sur les services offerts par Plan RH
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button class="col-md-12 btn btn-primary d-block" type="submit" name="soumette_employeur">Soumettre</a>
                  </div>
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
Register -->
<br><br>
<!--=================================
feature-info-->

<!--=================================
footer-->
