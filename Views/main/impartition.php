
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
        <h2 class="text-primary">Impartition</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/main"> Accueil </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Impartition</span></li>
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
        <h5 class="text-center">UN SERVICE D'IMPARTITION SUR LEQUEL VOUS POUVEZ COMPTER.</h5>
        <h6 class="text-center">NOTRE MAIN D’ŒUVRE ET NOS INFRASTRUCTURES, VOS OPÉRATIONS.</h6>
        <p>Un nouveau projet, une nouvelle tâche vous incombe, mais vous n’avez pas les ressources internes pour vous en acquitter. Bédard Ressources peut prendre en charge ce projet ou cette tâche et agir comme gestionnaire de projet de façon tout à fait transparente. Nous mettrons en place les ressources compétentes pour mener à bien ce mandat tout en respectant vos procédures, votre budget et votre échéancier.</p>
        <br>
        <h5 class="text-center">LES AVANTAGES DE L'IMPARTITION DE VOS OPÉRATIONS.</h5>
        
        <p class="mb-0"><i class="fas fa-check"></i> Flexibilité d’adaptation selon la fluctuation de vos activités </p>
        <p class="mb-0"><i class="fas fa-check"></i> Facture unique pour une gestion complète </p>
        <p class="mb-0"><i class="fas fa-check"></i> Interlocuteur unique </p>
        <p class="mb-0"><i class="fas fa-check"></i> Contrôle de coûts inclus </p>
        <p class="mb-0"><i class="fas fa-check"></i> Recrutement de personnel </p>
        <p class="mb-0"><i class="fas fa-check"></i> Économies de temps et d’argent! </p>

      </div>
    </div>
    
    <div class="row mt-5">
      <div class="col-12 section-title-02">
        <h2 class="text-center">QUELQUES EXEMPLES D’IMPARTITION</h2>
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
  <br> <br> 
</section>
<!--=================================
category -->
