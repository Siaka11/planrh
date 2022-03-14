

<!--=================================
Post New Job -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4 d-inline-block">
            <h4>Publier un emploi</h4>
          </div>
          <div class="row">
            <div class="col-12">
             
              <form method="POST" class="row">
                <div class="form-group mt-0 mb-3 col-md-12">
                  <label class="form-label">Titre de l'emploi</label>
                  <input type="text" name="titre" class="form-control" value="">
                </div>
                <div class="form-group mt-0 mb-3 col-md-12">
                  <label class="form-label">Description de l'emploi</label>
                  <textarea class="form-control" name="description" rows="4"></textarea>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 datetimepickers">
                <label class="form-label">Date d'expiration de l'emploi</label>
                <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                  <input type="text" name="date" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-01">
                  <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div>
                </div>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Type d'emploi</label>
                  <select name="typeemploi" class="form-control basic-select">
                  <?php foreach($typeemploi as $typeemploione): ?>   
                    <option value="<?=$typeemploione->nom ?>" selected="selected"><?=$typeemploione->nom ?></option>

                    <?php endforeach?>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Secteur d'emploi</label>
                  
                  <select name="secteur" class="form-control basic-select">
                  <?php foreach($domaine as $domaineone): ?>   
                    <option value="<?=$domaineone->nom ?>" ><?=$domaineone->nom ?></option>
                    
                    <?php endforeach?>
                  </select>
                 
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Type de demande</label>
                  <select name="typedemande" class="form-control basic-select">
                    <option value="Externe" selected="selected">Externe</option>
                    <option value="Ressources humaines">Ressources humaines</option>
                    <option value="Informatique">Informatique</option>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Type de salire</label>
                  <select name="typesalaire" class="form-control basic-select">
                    <option value="Annuel">Annuel</option>
                    <option value="Mensuel">Mensuel</option>
                    <option value="Horraire">Horraire</option>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6">
                  <label class="form-label">Salaire Min</label>
                  <input  type="text" name="salairemin" class="form-control" value="">
                </div>
                <div class="form-group mt-0 col-md-6 mb-3 mb-md-0">
                  <label class="form-label">Salaire Max</label>
                  <input type="text" name="salairemax" class="form-control" value="">
                </div>
                <div class="form-group mt-0 col-md-6 mb-0">
                  <label class="form-label">Compétence Professionnelle</label>
                  <input type="text" name="competence" class="form-control" value="">
                </div>

                <div class="user-dashboard-info-box">
                <div class="row">
                  <div class="col-12">
                    <h4 class="mb-3">Pièce Jointe</h4>
                    <div class="upload-file mb-0">
                      <label for="formFile" class="form-label">Uploader un fichier</label>
                      <input class="form-control" name="mafiche" type="file" id="formFile">
                    </div>
                  </div>
                </div>
            </div>
              <div class="user-dashboard-info-box">
                <div class="form-group mb-0">
                  <h4 class="mb-4">Lieu de, l'emploi</h4>
                  <div class="form-group mb-3">
                    <label class="form-label">Entrez votre Adresse</label>
                    <input type="text" name="adresse" class="form-control" value="" placeholder="Entrez votre Adresse">
                  </div>
                  <div class="company-address-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15888.330386693791!2d-3.9894956!3d5.4043882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf06c43c49b7720e7!2sOrientation%20Canada%20Multi-visas!5e0!3m2!1sfr!2sci!4v1642435304629!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                </div>
              </div>
                <button class="btn btn-md btn-primary" style="width: 200px;">soumettre</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Post New Job -->

