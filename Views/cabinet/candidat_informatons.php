<?php
  use App\Models\FormationModel;
?>
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
              <li><a class="active"  href="../cabinet/candidats">Candidats</a></li>
              <li><a href="../cabinet/formations">Formations</a></li>
              <li><a href="../cabinet/actualites">Actualités</a></li>
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
    Dashboard Nav -->
    <!--=================================
    My Resume -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="section-title-02">
          <h3>A propos de moi</h3>
        </div>
      </div>
      <div class="col-lg-4 text-lg-end">
        <?php
            $candidat_nom_replace = str_replace(' ', '-', $candidat->nom);
            $candidat_nom = explode('-', $candidat_nom_replace);
            $nom = $candidat_nom[0];
            $info = $nom.'-'.$candidat->id
        ?>
        <a class="btn btn-primary btn-md mb-4 mb-lg-0" target="_blank" onclick="displayPDF('<?= $info ?>')">Aperçu du CV</a>
      </div>
      <div class="col-12">
        <div class="user-dashboard-info-box">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Formations</h4>
            </div>
            <!-- <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter un Formation</a> -->
          </div>

          <div class="jobber-candidate-timeline mt-4">
          <?php foreach($findFormation as $findFormationOne): ?>
            
            <div class="jobber-timeline-icon">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="jobber-timeline-item">
              <div class="jobber-timeline-cricle">
                <i class="far fa-circle"></i>
              </div>
              <!-- first -->
              
              <div class="jobber-timeline-info">
              
                <div class="dashboard-timeline-info">
                
                  <div class="dashboard-timeline-edit">
                    <ul class="list-unstyled d-flex">
                      
                    </ul>
                  </div>
                  <span class="jobber-timeline-time"><?=$findFormationOne->annee?></span>
                  <h6 class="mb-2"><?=$findFormationOne->titre?></h6>
                  <span>- <?=$findFormationOne->etablissement?></span>
                  <p class="mt-2"><?=$findFormationOne->description?>.</p>
                    <!-- panel dash -->
                  <div class="collapse show" id="dateposted-02">
                    <div class="bg-light p-3">
                     
                    <form method="POST" class="row collapse show" id="dateposted-01">
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Titre</label>
                        <input type="text" disabled name="titre" class="form-control" value="<?=$findFormationOne->titre?>">
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border">
                        <label class="form-label">Année</label>
                        <select disabled name="annee" value="" class="form-control basic-select">
                          <option value="<?=$findFormationOne->annee?>" selected="selected"><?=$findFormationOne->annee?></option>
                          <option value="2008">2008</option>
                          <option value="2009">2009</option>
                          <option value="2010">2010</option>
                          <option value="2011">2011</option>
                          <option value="2012">2012</option>
                          <option value="2013">2013</option>
                          <option value="2014">2014</option>
                          <option value="2015">2015</option>
                          <option value="2016">2016</option>
                          <option value="2017">2017</option>
                          <option value="2018">2018</option>
                          <option value="2019">2019</option>
                          <option value="2020">2020</option>
                          <option value="2021">2021</option>
                          <option value="2022">2022</option>
                        </select>
                      </div>
                      <div class="form-group mb-3 col-md-6">
                        <label class="form-label">Etablissement de formation</label>
                        <input type="text" disabled name="etablissement" class="form-control" value="<?=$findFormationOne->etablissement?>">
                        <input type="hidden" name="myid" value="<?=$findFormationOne->id ?>">
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Description de la formation</label>
                        <textarea class="form-control" disabled name="description" rows="4" placeholder="descrisption de la formation."><?=$findFormationOne->description?></textarea>
                      </div>
                        </form>
                      </div>
                    </div>
                    <!-- end panel dash -->
                </div> 
                
              </div>
             
              
              <!-- end first -->
            </div> 
            <?php endforeach; ?>
          </div>
        </div>
        <!--=================================
        Work & Experience -->
        <div class="user-dashboard-info-box" >
          <div class="dashboard-resume-title d-flex align-items-center" >
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Expériences Professionnelle</h4>
            </div>
            <!-- <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse" href="#dateposted-05" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter une expérience</a> -->
          </div>

          <div class="jobber-candidate-timeline mt-4">
             <!-- first field -->
            <?php foreach($findExperience as $findExperienceOne): ?>
            <div class="jobber-timeline-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <div class="jobber-timeline-item">
              <div class="jobber-timeline-cricle">
                <i class="far fa-circle"></i>
              </div>
              <div class="jobber-timeline-info">
                <div class="dashboard-timeline-info">
                  <div class="dashboard-timeline-edit">
                   
                  </div>
                  <span class="jobber-timeline-time"><?=$findExperienceOne->datedebut ?> au  <?=$findExperienceOne->datefin ?></span>
                  <h6 class="mb-2"><?=$findExperienceOne->titre ?></h6>
                  <span>- <?=$findExperienceOne->entreprise ?></span>
                  <p class="mt-2"><?=$findExperienceOne->description ?></p>
                </div>
                <div class="collapse show" id="dateposted-06">
                  <div class="bg-light p-3">
                    <form method="POST" class="row collapse show" id="dateposted-form-01">
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Titre du poste</label>
                        <input type="text" disabled name="titre" class="form-control" value="<?=$findExperienceOne->titre ?>">
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Nom de l'entreprise</label>
                        <input type="text" disabled name="entreprise" class="form-control" value="<?=$findExperienceOne->entreprise ?>">
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                        <label class="form-label">Du</label>
                        <div class="input-group date" id="datetimepicker-05" data-target-input="nearest">
                          <input type="date" disabled name="datedebut" class="form-control datetimepicker-input" value="<?=$findExperienceOne->datedebut ?>" data-target="#datetimepicker-05">
                          <!-- <div class="input-group-append d-flex" data-target="#datetimepicker-05" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div> -->
                        </div>
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                        <label class="form-label">Au</label>
                        <div class="input-group date" id="datetimepicker-06" data-target-input="nearest">
                          <input type="date" disabled name="datefin" class="form-control datetimepicker-input" value="<?=$findExperienceOne->datefin ?>" data-target="#datetimepicker-06">
                          <input type="hidden" name="myidexp" value="<?=$findExperienceOne->id ?>">

                          <!-- <div class="input-group-append d-flex" data-target="#datetimepicker-06" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div> -->
                        </div>
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" disabled name="description" rows="4" placeholder="Description du poste."><?=$findExperienceOne->description ?></textarea>
                      </div>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
            
          <?php endforeach ; ?>
          </div>
        </div>
        <!--=================================
        Work & Experience -->
        <!--=================================
        Professional Skill -->
        <div class="user-dashboard-info-box" id="competence">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Compétences Professionnelles</h4>
            </div>
            <!-- Button trigger modal -->

          </div>
          <div class="collapse show" id="dateposted-11" >
            <div id="link" class="bg-light p-3 mt-4" >
              <?php foreach($comptencemodels as $comptencemodel): ?>
                <form class="row align-items-center mt-2" id="formremove" method="POST">
                  <div  class="form-group mb-3 col-md-6">
                    <label class="form-label">Titre</label>
                    <input type="text" disabled name="titre" class="form-control" value="<?= $comptencemodel->titre ?>">
                  </div>
                  <div class="form-group mb-3 col-md-5">
                    <label class="form-label">Pourcentage</label>
                    <input type="number" disabled name="pourcentage"  class="form-control" value="<?= $comptencemodel->pourcentage ?>">
                  </div>
                </form>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <!--=================================
        Professional Skill -->
        <!--=================================
        Awards -->
        <div class="user-dashboard-info-box" >
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Récompences</h4>
            </div>
            <!-- <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse" href="#dateposted-15" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter une récompense</a> -->
          </div>
          <div class="collapse show" id="dateposted-15">

            <div class="jobber-candidate-timeline mt-4">
             <!-- third group -->
             <?php foreach($findReccompense as $findRecompenseOne ): ?>
              <div class="jobber-timeline-icon">

                <i class="fas fa-trophy"></i>
              </div>
              <div class="jobber-timeline-item">
                <div class="jobber-timeline-cricle">
                  <i class="far fa-circle"></i>
                </div>
                <div class="jobber-timeline-info">
                  <div class="dashboard-timeline-info">
                    <div class="dashboard-timeline-edit">
                     
                    </div>
                    <span class="jobber-timeline-time"><?=$findRecompenseOne->datedebut?> - <?=$findRecompenseOne->datefin?> </span>
                    <h6 class="mb-2"><?=$findRecompenseOne->titre?> </h6>
                    <span>- <?=$findRecompenseOne->institution?> </span>
                    <p class="mt-2"><?=$findRecompenseOne->description ?></p>
                  </div>
                  <div class="collapse show" id="dateposted-16">
                    <div class="bg-light p-3">
                      <form class="row collapse show" id="dateposted-form-07">
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Titre</label>
                          <input type="text" disabled class="form-control" name="titre" value="<?=$findRecompenseOne->titre?> ">
                        </div>
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Institution</label>
                          <input type="text" disabled class="form-control" name="institution" value="<?=$findRecompenseOne->institution?> ">
                        </div>
                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                          <label class="form-label">Du</label>
                          <div class="input-group date" id="datetimepicker-11" data-target-input="nearest">
                            <input type="date" disabled class="form-control datetimepicker-input" name="datedebut" value="<?=$findRecompenseOne->datedebut?> " data-target="#datetimepicker-11">
                            <!-- <div class="input-group-append d-flex" data-target="#datetimepicker-11" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div> -->
                          </div>
                        </div>
                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                          <label class="form-label">Au</label>
                          <div class="input-group date" id="datetimepicker-12" data-target-input="nearest">
                            <input type="date" disabled class="form-control datetimepicker-input" name="datefin" value="<?=$findRecompenseOne->datefin?> " data-target="#datetimepicker-12">
                            <!-- <div class="input-group-append d-flex" data-target="#datetimepicker-12" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div> -->
                          </div>
                        </div>
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Description</label>
                          <textarea class="form-control" disabled rows="4" name="description" placeholder="<?=$findRecompenseOne->description?> "></textarea>
                        </div>
                        
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              
           
            <?php endforeach ; ?>
          </div>
        </div>
        <!--=================================
        Awards -->
        <!-- <a class="btn btn-md btn-primary" href="#">Enregistrez</a> -->
      </div>
    </div>
  </div>
</section>

<script>

    function displayPDF($id_candidat){
        window.open("../cabinet/affiche_cv_pdf/"+$id_candidat, "_blank");
      
    }
</script>
    <!--=================================
    My Resume -->
    
 