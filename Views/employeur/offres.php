<!--=================================
Post New Job -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4 d-inline-block">
            <h4>Modifier l'offre</h4>
          </div>
          <div class="row">
            <div class="col-12">
             
              <form method="POST" class="row">
                <div class="form-group mt-0 mb-3 col-md-12">
                  <label class="form-label">Titre de l'emploi</label>
                  <input type="text" name="titre" class="form-control" value="<?= $offre->titre ?>">
                </div>
                <div class="form-group mt-0 mb-3 col-md-12">
                  <label class="form-label">Description de l'emploi</label>
                  <textarea class="form-control" name="description" value="" rows="4"><?= $offre->description ?></textarea>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 datetimepickers">
                <label class="form-label">Date d'expiration de l'emploi</label>
                <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                  <input type="date" name="date_expiration" class="form-control datetimepicker-input" placeholder="Date" value="<?= $offre->date_expiration ?>" data-target="#datetimepicker-01">
                  <!-- <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div> -->
                </div>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Type d'emploi</label>
                  <select name="typeemploi" class="form-control basic-select">
                    
                  <?php foreach($typeemplois as $typeemploione): ?>   
                    <?php if($typeemploione->id == $offre->typeemploi): ?>
                        <option value="<?=$typeemploione->id ?>" selected="selected"><?=$typeemploione->nom ?></option>
                    <?php else: ?>
                        <option value="<?=$typeemploione->id ?>" ><?=$typeemploione->nom ?></option>
                    <?php endif;?>

                    <?php endforeach?>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Secteur d'emploi</label>
                  
                  <select name="domaine" class="form-control basic-select">
                    <?php foreach($domaines as $domaineone): ?>  
                        <?php if($domaineone->id == $offre->domaine): ?>
                            <option value="<?=$domaineone->id ?>" selected="selected"><?=$domaineone->nom ?></option>
                        <?php else: ?>
                            <option value="<?=$domaineone->id ?>" ><?=$domaineone->nom ?></option>
                        <?php endif;?>   
                    <?php endforeach?>
                  </select>
                 
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Type de demande</label>
                  <select name="typedemande" class="form-control basic-select">
                    <?php foreach($typedemandes as $typdemande): ?>   
                        <?php if($typdemande->id == $offre->typedemande): ?>
                            <option value="<?=$typdemande->id ?>" selected="selected"><?=$typdemande->nom ?></option>
                        <?php else: ?>
                            <option value="<?=$typdemande->id ?>" ><?=$typdemande->nom ?></option>
                        <?php endif;?>
                    <?php endforeach?>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6 select-border">
                  <label class="form-label">Type de salaire</label>
                  <select name="typesalaire" class="form-control basic-select">
                    <?php foreach($salaires as $salaire): ?>  
                        <?php if($salaire->id == $offre->typesalaire): ?>
                            <option value="<?=$salaire->id ?>" selected="selected"><?=$salaire->nom ?></option>
                        <?php else: ?>
                            <option value="<?=$salaire->id ?>" ><?=$salaire->nom ?></option>
                        <?php endif;?>
                    <?php endforeach?>
                  </select>
                </div>
                <div class="form-group mt-0 mb-3 col-md-6">
                  <label class="form-label">Salaire Min</label>
                  <input  type="text" name="salairemin" class="form-control" value="<?= $offre->salairemin ?>">
                </div>
                <div class="form-group mt-0 col-md-6 mb-3 mb-md-0">
                  <label class="form-label">Salaire Max</label>
                  <input type="text" name="salairemax" class="form-control" value="<?= $offre->salairemax ?>">
                </div>
                <div class="form-group mt-0 col-md-6 mb-0">
                  <label class="form-label">Compétence Professionnelle</label>
                  <textarea class="form-control" name="competence" value="" rows="4"><?= $offre->competence ?></textarea>
                </div>
                <div class="user-dashboard-info-box">
                <!-- <div class="row">
                  <div class="col-12">
                    <h4 class="mb-3">Pièce Jointe</h4>
                    <div class="upload-file mb-0">
                      <label for="formFile" class="form-label">Uploader un fichier</label>
                      <input class="form-control" name="mafiche" type="file" id="formFile">
                    </div>
                  </div>
                </div> -->
            </div>
              <div class="user-dashboard-info-box">
                <div class="form-group mb-0">
                  <h4 class="mb-4">Lieu de, l'emploi</h4>
                  <div class="form-group mb-3">
                    <label class="form-label">Entrez votre Adresse</label>
                    <input type="text" name="adresse" class="form-control" value="<?= $offre->adresse ?>" >
                  </div>
                </div>
              </div>
                <button type="submit" name="modifer_offre" class="btn btn-md btn-primary col-md-12" style="width: 200px;">Modifier</button>
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

