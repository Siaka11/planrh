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
              <img class="img-fluid " src="../../images/avatar/06.jpg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ms-4">
              <h3>Ange Brou1</h3>
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
              <li><a href="../backend_candidat/">Accueil</a></li>
              <li><a href="../backend_candidat/profil">Mon Profil</a></li>
              <li><a href="../backend_candidat/modification_pass">Modifier Mon Pass</a></li>
              <li><a href="../backend_candidat/imprimer" target="_blank">Mon CV</a></li>
              <li><a href="../backend_candidat/modification_cv" class="active">Modifier Mon CV</a></li>
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
    My Resume -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="section-title-02">
          <h3>My Resume</h3>
        </div>
      </div>
      <div class="col-lg-4 text-lg-end">
        <a class="btn btn-primary btn-md mb-4 mb-lg-0" href="backend-candidat-cv.php" target="_blank">Aperçu de mon CV</a>
      </div>
      <div class="col-12">
        <div class="user-dashboard-info-box">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Formations</h4>
            </div>
            <!-- <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter un Formation</a> -->
          </div>
          <div class="collapse show" id="dateposted">
            <div class="bg-light p-3 mt-4">
              <form class="row" method="POST">
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Titre</label>
                  <input type="text" class="form-control" name="titre" value="">
                </div>
                <div class="form-group mb-3 col-md-6 select-border">
                  <label class="form-label">Année</label>
                  <select name="annee" class="form-control  basic-select">
                    <option value="2020" selected="selected">2020</option>
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
                  <input type="text" name="etablissement" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Description</label>
                  <textarea class="form-control" name="description" rows="4"></textarea>
                </div>
                <div class="form-group col-md-12 mb-0">
                    <button class="btn btn-primary d-grid" name="send" >Ajouter</button>
                </div>
              </form>
            </div>
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
                      <li><a class="text-end" data-bs-toggle="collapse" href="#dateposted-02" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                      <li><a href="/backend_candidat/supprimerformation/<?=$findFormationOne->id?>"><i class="far fa-trash-alt text-danger"></i></a></li>
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
                        <input type="text" name="titre" class="form-control" value="<?=$findFormationOne->titre?>">
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border">
                        <label class="form-label">Année</label>
                        <select name="annee" value="" class="form-control basic-select">
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
                        <input type="text" name="etablissement" class="form-control" value="<?=$findFormationOne->etablissement?>">
                        <input type="hidden" name="myid" value="<?=$findFormationOne->id ?>">
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Description de la formation</label>
                        <textarea class="form-control" name="description" rows="4" placeholder="descrisption de la formation."><?=$findFormationOne->description?></textarea>
                      </div>
                      <div class="form-group col-md-12 mb-0">
                      <button class="btn btn-primary d-grid" name="send1" >Mettez à jour </button>
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
        <div class="user-dashboard-info-box">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Expériences Professionnelle</h4>
            </div>
            <!-- <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse" href="#dateposted-05" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter une expérience</a> -->
          </div>
          <div class="collapse show" id="dateposted-05">
            <div class="bg-light p-3 mt-4">
              <form method="POST" class="row">
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Titre</label>
                  <input type="text" name="titre" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Nom de l'Entreprise</label>
                  <input type="text" name="entreprise" class="form-control" value="">
                </div>
                <div class="mb-3 col-md-6 datetimepickers">
                  <label class="form-label">De</label>
                  <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                    <input type="text" name="datedebut" class="form-control datetimepicker-input" value="08/11/2010" data-target="#datetimepicker-01">
                    <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                  <label class="form-label">au</label>
                  <div class="input-group date" id="datetimepicker-02" data-target-input="nearest">
                    <input type="text" name="datefin" class="form-control datetimepicker-input" value="08/10/2012" data-target="#datetimepicker-02">
                    <div class="input-group-append d-flex" data-target="#datetimepicker-02" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Description</label>
                  <textarea class="form-control" name="description" rows="4"></textarea>
                </div>
                <div class="form-group col-md-12 mb-0">
                    <button class="btn btn-primary d-grid" name="send2" >Ajouter</button>
                </div>
              </form>
            </div>
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
                    <ul class="list-unstyled d-flex">
                      <li><a class="text-end" data-bs-toggle="collapse" href="#dateposted-06" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                      <li><a href="/backend_candidat/supprimerexperience/<?=$findExperienceOne->id ?>"><i class="far fa-trash-alt text-danger"></i></a></li>
                    </ul>
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
                        <input type="text" name="titre" class="form-control" value="<?=$findExperienceOne->titre ?>">
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Nom de l'entreprise</label>
                        <input type="text" name="entreprise" class="form-control" value="<?=$findExperienceOne->entreprise ?>">
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                        <label class="form-label">Du</label>
                        <div class="input-group date" id="datetimepicker-05" data-target-input="nearest">
                          <input type="text" name="datedebut" class="form-control datetimepicker-input" value="<?=$findExperienceOne->datedebut ?>" data-target="#datetimepicker-05">
                          <div class="input-group-append d-flex" data-target="#datetimepicker-05" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                        <label class="form-label">Au</label>
                        <div class="input-group date" id="datetimepicker-06" data-target-input="nearest">
                          <input type="text" name="datefin" class="form-control datetimepicker-input" value="<?=$findExperienceOne->datefin ?>" data-target="#datetimepicker-06">
                          <input type="hidden" name="myidexp" value="<?=$findExperienceOne->id ?>">

                          <div class="input-group-append d-flex" data-target="#datetimepicker-06" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="4" placeholder="Description du poste."><?=$findExperienceOne->description ?></textarea>
                      </div>
                      <div class="form-group col-md-12 mb-0">
                      <button class="btn btn-primary d-grid" name="send3">Metre à jour</button>
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
        <div class="user-dashboard-info-box">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Compétences Professionnelles</h4>
            </div>
            <a class="btn btn-md ms-sm-auto btn-primary" id="add_more_fields" data-bs-toggle="collapse" href="#dateposted-15" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter une récompense</a>


          </div>
          <div class="collapse show" id="dateposted-11" >
            <div id="link" class="bg-light p-3 mt-4" >
              <form class="row align-items-center" id="formremove" method="POST">
                <div  class="form-group mb-3 col-md-6">
                  <label class="form-label">Titre</label>
                  <input type="text" name="titre" class="form-control" value="compétence">
                </div>
                <div class="form-group mb-3 col-md-5">
                  <label class="form-label">Pourcentage</label>
                  <input type="text" name="pourcentage"  class="form-control" value="70%">
                </div>
                <div  class="form-group mb-3 col-md-1 text-center">
                  <a class="mt-3 d-block" id="remove_fields" ><i class="far fa-trash-alt text-danger" ></i></a>
                </div>
              </form>
              <div id="newRow">

              
              </div>

            </div>
          </div>
        </div>
        <!--=================================
        Professional Skill -->
        <!--=================================
        Awards -->
        <div class="user-dashboard-info-box">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Récompences</h4>
            </div>
            <!-- <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse" href="#dateposted-15" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter une récompense</a> -->
          </div>
          <div class="collapse show" id="dateposted-15">
            <div class="bg-light p-3 mt-4">
              <form  method="POST" class="row">
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Titre de la récompense</label>
                  <input type="text" name="titre" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Institution</label>
                  <input type="text" name="institution" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                  <label class="form-label">Du</label>
                  <div class="input-group date" id="datetimepicker-09" data-target-input="nearest">
                    <input type="text" name="datedebut" class="form-control datetimepicker-input" value="07/03/2010" data-target="#datetimepicker-09">
                    <div class="input-group-append d-flex" data-target="#datetimepicker-09" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                  <label class="form-label">Au</label>
                  <div class="input-group date" id="datetimepicker-10" data-target-input="nearest">
                    <input type="text" name="datefin" class="form-control datetimepicker-input" value="08/10/2011" data-target="#datetimepicker-10">
                    <div class="input-group-append d-flex" data-target="#datetimepicker-10" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Description</label>
                  <textarea name="description" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group col-md-12 mb-0">
                  <button class="btn btn-primary d-grid" name="send4">Ajouter</button>
                </div>
              </form>
            </div>
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
                      <ul class="list-unstyled d-flex">
                        <li><a class="text-end" data-bs-toggle="collapse" href="#dateposted-16" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                        <li><a href="/backend_candidat/supprimerrecompense/<?=$findRecompenseOne->id?>"><i class="far fa-trash-alt text-danger"></i></a></li>
                      </ul>
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
                          <input type="text" class="form-control" name="titre" value="<?=$findRecompenseOne->titre?> ">
                        </div>
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Institution</label>
                          <input type="text" class="form-control" name="institution" value="<?=$findRecompenseOne->institution?> ">
                        </div>
                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                          <label class="form-label">Du</label>
                          <div class="input-group date" id="datetimepicker-11" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" name="datedebut" value="<?=$findRecompenseOne->datedebut?> " data-target="#datetimepicker-11">
                            <div class="input-group-append d-flex" data-target="#datetimepicker-11" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                          <label class="form-label">Au</label>
                          <div class="input-group date" id="datetimepicker-12" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" name="datefin" value="<?=$findRecompenseOne->datefin?> " data-target="#datetimepicker-12">
                            <div class="input-group-append d-flex" data-target="#datetimepicker-12" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Description</label>
                          <textarea class="form-control" rows="4" name="description" placeholder="<?=$findRecompenseOne->description?> "></textarea>
                        </div>
                        <div class="form-group col-md-12 mb-0">
                         <button class="btn btn-primary d-grid" name="sendR">Metre à jour</button>
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
    <!--=================================
    My Resume -->
 