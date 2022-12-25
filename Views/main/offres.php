

<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary"><?= $offre->titre ?></h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/main"> Domaine </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span><?= $offre->domaine_nom ?></span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->


<section class="space-ptb">
  <div class="heart-btn">
      <div class="content">
        <span class="heart"></span>
        <span class="text">Like</span>
        <span class="numb"></span>
      </div>
    </div>
  <div class="container">
    <div class="row" style="text-align:center;">
      <div class="col-12 section-title-02">
        <h5 class="text-center">Description : <span style="font-size: 12px"> <?= $offre->description ?></span></h5>
        <p><?= $offre->competence ?></p>

      </div>
    </div>
   
    <div class="row">

    <!--=================================
    Service -->

      <div class="row">
      <div class="col-12">
        <div class="section-title text-start">
          <div class="row mt-5">
        <div class="col-12 section-title-02">
          <h4 class="text-center">Recrutement de:</h4>
        </div>
    </div>
        </div>
      </div>
    </div>
    <div class="row mb-4 mb-md-4">
      <div class="col-md-4 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-team"></i>
          <p class="ps-3 align-self-center mb-0">Cadres supérieurs</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-job-3"></i>
          <p class="ps-3 align-self-center mb-0">Cadres intermédiaires</p>
        </div>
      </div>
       <div class="col-md-4 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-chat"></i>
          <p class="ps-3 align-self-center mb-0">Professionnels</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="section-title text-start">
          <div class="row mt-5">
        <div class="col-12 section-title-02">
          <h4 class="text-center">Une Méthodologie rigoureuse :</h4>
        </div>
    </div>
        </div>
      </div>
    </div>
    <div>
      <ul class="list-group">
        <li class="list-group-item">Identifier et comprendre le poste</li>
        <li class="list-group-item">Évaluer les compétences demandées</li>
        <li class="list-group-item">Comprendre la culture d’entreprise et des intervenants</li>
        <li class="list-group-item">Rechercher un équilibre (compétences et qualités interpersonnelles)</li>
        <li class="list-group-item">Favoriser un partenariat dynamique avec l’employeur et le candidat</li>
        <li class="list-group-item">Assurer la qualité des suivis avec les clients et les candidats</li>
     </ul>
    </div>
    <div>
      <br>
    </div>
  <div class="accordion accordion-style" id="accordion-Two">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Vous êtes à la recherche d’un partenaire pour le recrutement de votre personnel ? <i class="fas fa-chevron-down fa-xs"></i></button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordion-Two">
              <div class="accordion-body">
                <form class="mt-4">
                <div class="row">
                  <div class="mb-3 col-md-6">
                    <label class="form-label" for="Username">Nom *</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Prénoms *</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="mb-3 col-md-6">
                    <label class="form-label">Compagnie *</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="mb-3 col-6">
                    <label class="form-label" for="ville">Ville *</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="mb-3 col-6">
                    <label class="form-label" for="ville">Téléphone *</label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="mb-3 col-6">
                    <label class="form-label" for="ville">Email * </label>
                    <input type="text" class="form-control">
                  </div>

                  <div class="form-group col-12 mb-0">
                    <label class="form-label" for="domaine">Message</label>
                    <textarea rows="8" class="form-control" id="message"></textarea>
                  </div>
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
                    <a class="btn btn-primary d-block" href="#">Soumettre</a>
                  </div>
                </div>
              </form>
              </div>
            </div>
          </div>
        </div>
  </div>

  <br> <br> 
</section>
<!--=================================
Service -->

