


    <!--=================================
    My Resume -->
    <div class="space-ptb" >
  <div class="container" >
  <button class="btn btn-primary "  onclick="generatePDF()">Télécharger le PDF</button>

    <div class="row justify-content-center" >
      <div class="col-md-9" id="getElt">
        <div class="row">
          <div class="col-lg-5">
            <div class="resume-base bg-light user-dashboard-info-box">

              <div class="profile">
                <div class="jobber-user-info">
                  <div class="profile-avatar">
                    <img class="img-fluid " src="../images/avatar/06.jpg" alt="">
                  </div>
                  <div class="profile-avatar-info mt-3">
                    <h5><?=$users->nom?> <?php echo "<br/> Option: Travailleur" ?></h5>
                  </div>
                </div>
              </div>
              <div class="about-candidate border-top">
                <div class="candidate-info">
                  <h6>Nom :</h6>
                  <p><?=$users->nom?></p>
                </div>
                <div class="candidate-info">
                  <h6>Email:</h6>
                  <p><?=$users->email?></p>
                </div>
                <div class="candidate-info">
                  <h6>Téléphone :</h6>
                  <p><?=$users->contact?></p>
                </div>
                <div class="candidate-info">
                  <h6>Date de Naissance:</h6>
                  <p><?=$users->datenaissance?></p>
                </div>
                <div class="candidate-info">
                  <h6>Adresse:</h6>
                  <p>Abidjan - Marcory Remblais</p>
                </div>
                <div class="candidate-info">
                  <h6>Genre:</h6>
                  <p><?=$users->genre?></p>
                </div>
                <p><?=$users->description?></p>
              </div>
            
              <!-- end profile -->
            </div>
          </div>
          <div class="col-lg-7">
            <div class="resume-experience ps-0">
              <div class="timeline-box">
                <h5 class="resume-experience-title">Formation:</h5>
                <?php foreach($findFormation as $findFormationOne): ?>
                <div class="jobber-candidate-timeline">
                  <div class="jobber-timeline-item">
                    <div class="jobber-timeline-cricle">
                      <i class="far fa-circle"></i>
                    </div>
                    <div class="jobber-timeline-info">
                      <div class="dashboard-timeline-info">
                        <span class="jobber-timeline-time"><?=$findFormationOne->annee ?></span>
                        <h6 class="mb-2"><?=$findFormationOne->titre ?></h6>
                        <span>- Lieu de formation</span>
                        <p class="mt-2"><?=$findFormationOne->description ?></p>
                      </div>
                    </div>
                  </div> 
                </div>
                <?php endforeach ; ?>
              </div>
              <div class="timeline-box mt-4">
                <h5 class="resume-experience-title">Expériences Professionnelles:</h5>
                <div class="jobber-candidate-timeline">

                <?php foreach($findExperience as $experienceOne): ?>
                  <div class="jobber-timeline-item">
                    <div class="jobber-timeline-cricle">
                      <i class="far fa-circle"></i>
                    </div>
                    <div class="jobber-timeline-info">
                      <div class="dashboard-timeline-info">
                        <span class="jobber-timeline-time"><?=$experienceOne->datedebut ?> au <?=$experienceOne->datefin ?></span>
                        <h6 class="mb-2"><?=$experienceOne->titre ?></h6>
                        <span>- <?=$experienceOne->entreprise ?></span>
                        <p class="mt-2"><?=$experienceOne->description ?></p>
                      </div>
                    </div>
                  </div>
                <?php endforeach ; ?>
                </div>
              </div>
                <div class="mt-4">
                  <h5>Compétences Professionnelles:</h5>

                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width:55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar-title">Compétense 01</div>
                      <span class="progress-bar-number">70%</span>
                    </div>
                  </div>
                  <div class="progress mb-md-0">
                    <div class="progress-bar" role="progressbar" style="width:80%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar-title">Compétense 02</div>
                      <span class="progress-bar-number">80%</span>
                    </div>
                  </div>

                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width:55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar-title">Compétense 03</div>
                      <span class="progress-bar-number">55%</span>
                    </div>
                  </div>
                  <div class="progress mb-md-0">
                    <div class="progress-bar" role="progressbar" style="width:60%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                      <div class="progress-bar-title">Compétense 04</div>
                      <span class="progress-bar-number">60%</span>
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
My Resume -->



