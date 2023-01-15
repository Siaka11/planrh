
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
        <h2 class="text-primary">Placement Temporaire</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/main"> Accueil </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Placement de Personnel Temporaire</span></li>
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
        <h5 class="text-center">DES EMPLOYÉS, RAPIDEMENT ET SIMPLEMENT</h5>
        <p>Vous devez faire remplacer un employé de toute urgence? Trouver une personne compétente pour un remplacement pendant un congé parental? Vous avez besoin de plus de personnel pendant une certaine période ou pendant une durée indéterminée?</p>

        <p>Un conseiller vous contactera dès réception de votre demande de manière à dresser un portrait exhaustif de votre entreprise et de vos besoins.</p>

      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="section-title-02">
          <h2>Nos Processus</h2>
        </div>
        <div class="browse-job d-flex border-0">
          <ul class="nav nav-tabs d-flex" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="tab-01" data-bs-toggle="tab" href="#ecoute" role="tab" aria-controls="ecoute" aria-selected="true">Ecoute</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-02" data-bs-toggle="tab" href="#garantie" role="tab" aria-controls="garantie" aria-selected="false">Garantie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-03" data-bs-toggle="tab" href="#flexibilite" role="tab" aria-controls="flexibilitz" aria-selected="false">Felxibité</a>
            </li>
          </ul>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="ecoute" role="tabpanel" aria-labelledby="tab-01">
            <p class="mt-4">Plan RH, agit pour vous comme employeur en se chargeant de la gestion de la paie et des jours fériés statutaires.</p>
            
          </div>
          <div class="tab-pane fade show" id="garantie" role="tabpanel" aria-labelledby="tab-02">
            <p class="mt-4">Garantie de 3 heures sur tout placement vous est offerte. Ainsi, si vous jugez que la personne proposée n’est pas apte à exécuter le travail demandé, un autre candidat vous sera présenté</p>
          </div>
          <div class="tab-pane fade show" id="flexibilite" role="tabpanel" aria-labelledby="tab-02">
            <p class="mt-4">Flexibilité : besoin d’un employé pendant 4 heures, 4 jours ou 4 mois? Vous désirez engager de façon permanente un employé temporaire? Vous avez le choix.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="section-title-02 mt-4 mt-md-0">
          <h2>Nos Services Offerts</h2>
        </div>
        <div class="browse-job d-flex">
          <div class="justify-content-start">
            <ul class="nav nav-tabs nav-tabs-02" role="tablist">
              <li class="nav-item">
                <a class="nav-link active ms-0" id="tab-03" data-bs-toggle="tab" href="#tab-06" role="tab" aria-controls="tab-06" aria-selected="true">Service de transport</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-04" data-bs-toggle="tab" href="#tab-07" role="tab" aria-controls="tab-07" aria-selected="false">Service de placement</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="tab-content">
          <div class="tab-pane fade active show" id="tab-06" role="tabpanel" aria-labelledby="tab-03">
            <p class="mt-4">Plan RH propose un service de transport des employés de leur domicile à leur lieu de travail aux heures où le transport en commun n’est pas disponible. Assurez-vous de ne pas manquer de main-d’œuvre pour une simple question de logistique grâce à Bédard Ressources.</p>
          </div>
          <div class="tab-pane fade" id="tab-07" role="tabpanel" aria-labelledby="tab-04">
            <p class="mt-4">Vous devez trouver quelqu’un de toute urgence pour remplacer un employé... le soir? la fin de semaine? très tôt le matin? Ayez recours au service de placement d’urgence 24 heures. Lorsque vous devenez client de Bédard Ressources et que votre entreprise fonctionne selon des quarts de travail, nous vous remettons un numéro d’urgence vous permettant de nous joindre en cas d’imprévu.</p>
            <p class="mt-4">Bédard Ressources vous accompagne en tout temps!</p>
          </div>
        </div>
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

    <!--=================================
    category -->

   
    <div>
       <br>
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

