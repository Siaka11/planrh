
<?php

use App\Models\EmployeurModel;
use App\Core\Util;
use App\Models\JaimeModel;
$util = new Util();



?>
<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Recrutement Permanent</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/"> Accueil </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Recrutement Permanent</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
category -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12 section-title-02">
        <h5 class="text-center">RECRUTEMENT PERMANENT : DÉCOUVREZ NOS SERVICES PERSONNALISÉS</h5>
        <h6 class="text-center">L’ENJEU D’UN RECRUTEMENT DE TRAVAILLEURS DE QUALITÉ</h6>
        <p>Plan RH met tout en œuvre pour que vos besoins en ressources humaines soient satisfaits. Le conseiller qui vous sera assigné connaît votre domaine d’activité et saura comprendre les défis qui sont les vôtres.</p>

        <p>Le service de placement permanent vise à vous aider à combler vos postes permanents de façon simple, rapide et efficace. Tous les candidats qui vous seront par la suite présentés auront été d’abord rencontrés et évalués de façon précise.Bédard Ressources offre en plus une garantie de placement selon vos besoins.</p>

      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12 section-title-02">
        <h4 class="text-center">Nos Domaines d'expertise</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="category-style text-center">
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-salary-1"></i>
            </div>
            <?php 
                $nbre_offre_achat_appro = $emploiModel->offre_domaine(1);
            ?>
            <h6>Achats-Approvisionnements</h6>
            <span class="mb-0"><?= $nbre_offre_achat_appro ?> Postes Disponibles </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-worker"></i>
            </div>
            <?php 
                $nbre_offre_gestion_ind = $emploiModel->offre_domaine(2);
            ?>
            <h6>Gestion industrielle</h6>
            <span class="mb-0"><?= $nbre_offre_gestion_ind ?> Postes Disponibles </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-conversation"></i>
            </div>
            <?php 
                $nbre_offre_ress_hum = $emploiModel->offre_domaine(3);
            ?>
            <h6>Ressources humaines-recrutement</h6>
            <span class="mb-0"><?= $nbre_offre_ress_hum ?> Postes Disponibles </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-selection-process"></i>
            </div>
            <?php 
                $nbre_offre_assurances = $emploiModel->offre_domaine(4);
            ?>
            <h6>Assurances</h6>
            <span class="mb-0"><?= $nbre_offre_assurances ?> Poste Disponible </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-coding"></i>
            </div>
            <?php 
                $nbre_offre_informatique = $emploiModel->offre_domaine(5);
            ?>
            <h6>Informatique</h6>
            <span class="mb-0"><?= $nbre_offre_informatique ?> Postes Disponibles </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-chat"></i>
            </div>
            <?php 
                $nbre_offre_client = $emploiModel->offre_domaine(6);
            ?>
            <h6>Service à la clientèle</h6>
            <span class="mb-0"><?= $nbre_offre_client ?> Postes Disponibles </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-worker"></i>
            </div>
            <?php 
                $nbre_offre_inge_tech = $emploiModel->offre_domaine(7);
            ?>
            <h6>Ingénierie-Technique</h6>
            <span class="mb-0"><?= $nbre_offre_inge_tech ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-doctor"></i>
            </div>
            <?php 
                $nbre_offre_sante = $emploiModel->offre_domaine(8);
            ?>
            <h6>Santé</h6>
            <span class="mb-0"><?= $nbre_offre_sante ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-taxi"></i>
            </div>
            <?php 
                $nbre_offre_chauffeur_cariste = $emploiModel->offre_domaine(9);
            ?>
            <h6>Chauffeurs-Caristes</h6>
            <span class="mb-0"><?= $nbre_offre_chauffeur_cariste ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-balance"></i>
            </div>
            <?php 
                $nbre_offre_juridique = $emploiModel->offre_domaine(10);
            ?>
            <h6>Juridique</h6>
            <span class="mb-0"><?= $nbre_offre_juridique ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-team"></i>
            </div>
            <?php 
                $nbre_offre_administratif = $emploiModel->offre_domaine(11);
            ?>
            <h6>Soutien administratif</h6>
            <span class="mb-0"><?= $nbre_offre_administratif ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-money"></i>
            </div>
            <?php 
                $nbre_offre_finances = $emploiModel->offre_domaine(12);
            ?>
            <h6>Comptabilité-Finances</h6>
            <span class="mb-0"><?= $nbre_offre_finances ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-salary"></i>
            </div>
            <?php 
                $nbre_offre_marketing = $emploiModel->offre_domaine(13);
            ?>
            <h6>Marketing</h6>
            <span class="mb-0"><?= $nbre_offre_marketing ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-shipped"></i>
            </div>
            <?php 
                $nbre_offre_transport = $emploiModel->offre_domaine(14);
            ?>
            <h6>Transport-Logistique</h6>
            <span class="mb-0"><?= $nbre_offre_transport ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-worker"></i>
            </div>
            <?php 
                $nbre_offre_construction = $emploiModel->offre_domaine(15);
            ?>
            <h6>Construction</h6>
            <span class="mb-0"><?= $nbre_offre_construction ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-job-2"></i>
            </div>
            <?php 
                $nbre_offre_achat_appro = $emploiModel->offre_domaine(16);
            ?>
            <h6>Métiers spécialisés-Fabrication</h6>
            <span class="mb-0"><?= $nbre_offre_construction ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-job-1"></i>
            </div>
            <?php 
                $nbre_generale_production = $emploiModel->offre_domaine(17);
            ?>
            <h6>Travail générale-Production</h6>
            <span class="mb-0"><?= $nbre_generale_production ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-approved"></i>
            </div>
            <?php 
                $nbre_offre_direction_cadre = $emploiModel->offre_domaine(18);
            ?>
            <h6>Direction-Cadre</h6>
            <span class="mb-0"><?= $nbre_offre_direction_cadre ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-fast-food"></i>
            </div>
            <?php 
                $nbre_offre_production_alimentaire = $emploiModel->offre_domaine(19);
            ?>
            <h6>Production alimentaire-Restauration</h6>
            <span class="mb-0"><?= $nbre_offre_production_alimentaire ?> Postes Disponibles</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-coin"></i>
            </div>
            <?php 
                $nbre_offre_vente = $emploiModel->offre_domaine(20);
            ?>
            <h6>Ventes-Représentations</h6>
            <span class="mb-0"><?= $nbre_offre_vente ?> Postes Disponibles</span>
          </a>
        </div>
      </div>
    </div>
  </div>

    <!--=================================
    category -->

    <!--=================================
    Service -->

      <div class="row">
      <div class="col-12">
        <div class="section-title text-start">
      <div class="row mt-5">
        <div class="col-12 section-title-02">
          <h4 class="text-center">Services Offerts</h4>
        </div>
    </div>
          <p>Notre équipe de conseillers certifiés s’occupent de vous guides à travers tout le processus de recrutement.
        Du début à la fin. Ou bien à la carte. Quels sont vos besoins?</p>
    </div>
      </div>
    </div>
    <div class="row mb-4 mb-md-4">
      <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-team"></i>
          <p class="ps-3 align-self-center mb-0">Rencontre avec le client pour écoute et analyse des besoins</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-job-3"></i>
          <p class="ps-3 align-self-center mb-0">Affichage du poste</p>
        </div>
      </div>
       <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-chat"></i>
          <p class="ps-3 align-self-center mb-0">Recherche de candidatures et chasse de têtes (selon le poste)</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-job-2"></i>
          <p class="ps-3 align-self-center mb-0">Entrevues téléphoniques et en personne</p>
        </div>
      </div>
    </div>

    <div class="row mb-4 mb-md-4">
      <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-team"></i>
          <p class="ps-3 align-self-center mb-0">Tests de compétences selon le poste & test psychométrique sur demande</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-job-3"></i>
          <p class="ps-3 align-self-center mb-0">Évaluation et sélection des candidatures</p>
        </div>
      </div>
       <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-chat"></i>
          <p class="ps-3 align-self-center mb-0">érification des antécédents judiciaires et références des anciens employeurs</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-job-2"></i>
          <p class="ps-3 align-self-center mb-0">Validation des diplômes et/ou des titres professionnels (selon le poste)</p>
        </div>
      </div>
    </div>

    <div class="row mb-4 mb-md-4">
      <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-team"></i>
          <p class="ps-3 align-self-center mb-0">Présentation des profils retenus à l’employeur</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-job-3"></i>
          <p class="ps-3 align-self-center mb-0">Accompagnement dans le processus de sélection et négociation salariale</p>
        </div>
      </div>
       <div class="col-md-3 col-sm-6">
        <div class="d-flex mb-4">
          <i class="font-xlll text-primary flaticon-chat"></i>
          <p class="ps-3 align-self-center mb-0">Suivi régulier après l’embauche</p>
        </div>
      </div>
    </div>
    <!-- <div class="accordion accordion-style" id="accordion-Two">
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
  </div> -->
  </div>

  <br> <br> 
</section>
<!--=================================
Service -->

<!--=================================
