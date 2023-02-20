<?php

use App\Models\EmployeurModel;
use App\Core\Util;
use App\Models\JaimeModel;
$util = new Util();



?>

<!--=================================
banner -->
<section class="banner-bg-slider">
  <div id="bg-slider">
    <img src="../images/bg-slider/01.jpg" alt="">
    <img src="../images/bg-slider/02.jpg" alt="">
    <img src="../images/bg-slider/03.jpg" alt="">
  </div>
  <div class="banner-bg-slider-content">
    <div class="container">
    <div class="row justify-content-center">
      <div class=" col-lg-9 col-md-9 d-flex">
        <div class="content text-center">
          <h1 class="text-white mb-2">Déposez votre <span class="text-primary"> CV et obtenez l' </span> emploi que vous souhaitez</h1>
          <p class="lead mb-4 fw-normal text-white">Dynamiser votre carrière en décrochant un emploi de rêve.</p>
          <div class="job-search-field">
            <div class="job-search-item">
              <form>
                <!-- <div class="col-sm-12">
                  <div class="form-group mb-md-0 justify-content-center">
                      <input type="text" class="form-control" name="job_title" placeholder="Poste, Entreprise...">
                    <button type="submit" class="btn btn-primary btn-lg m-0"><i class="fas fa-search"></i>Recherche</button>
                  </div>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<!--=================================
banner -->

<!--=================================
Action-box -->
<section class="bg-primary py-4 py-lg-5 ">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-9 mb-4 mb-sm-4 mb-lg-0">
        <div class="d-sm-flex">
          <h4 class="text-white">Créez votre compte gratuitement et publier un emploi</h4>
        </div>
      </div>
      <div class="col-md-3 text-lg-end">
        <a class="btn btn-dark" href="/backend_employeur/poster_emplois">publier un emploi</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Action-box -->

<!--=================================
Browse listing -->
<section class="space-ptb bg-light">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title center">
          <h2 class="title">emplois</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-9 col-md-12 order-lg-2 mb-3 mb-lg-0">
        <div class="browse-job d-flex border-0">
          <div class="style-01">
            <ul class="nav nav-tabs justify-content-center d-flex mt-0" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link  active" style="color: white!important" id="profile-tab"  data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Emplois récents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" style="color: white!important" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Emplois populaires</a>
              </li>
            </ul>
          </div>
          <div class="job-found ms-auto">
            <span class="badge badge-lg bg-primary"><?= count($offres) ?></span>
            <h6 class="ms-3 mb-0">Emplois Disponibles</h6>
          </div>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row mt-4 filter_data">
              
              
            </div>
            <div class="col-12 justify-content-center d-flex mt-4">
              <a class="btn btn-white btn-lg" href="/candidat/emplois">Plus d'emplois</a>
            </div>
          </div>
          <div class="tab-pane fade active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row mt-4 filter_data"> 
              
            </div>
            <div class="col-12 justify-content-center d-flex mb-4">
              <a class="btn btn-white btn-lg" href="/candidat/emplois">Plus d'Emplois</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 order-lg-1">
        <div class="sidebar mb-0">
          <div class="widget bg-white p-4">
            <div class="widget-title widget-collapse">
              <h5 class ="testeur">Domaine</h5>
              <a class="ms-auto" data-bs-toggle="collapse" href="#specialism" role="button" aria-expanded="false" aria-controls="specialism"> <i class="fas fa-chevron-down"></i> </a>
            </div>
            <div class="collapse show" id="specialism">
              <div class="widget-content"> 
                <?php foreach($domaine as $domaineone): ?>            
                <div class="form-check ">
                  <input class="form-check-input domaine common_selector" type="checkbox" value="<?= $domaineone->id?>" id="specialism1<?= $domaineone->nom?>">
                  <label class="form-check-label" for="specialism1<?= $domaineone->secteur?>"><?= $domaineone->nom?></label>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          
          <div class="owl-carousel owl-nav-bottom-center mt-4" data-nav-arrow="false" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="15" data-autoheight="true">
           
            <?php foreach($publicites as $publicite): ?>

            <div class="item">
              <div class="employers-grid bg-white py-4">
                <div class="employers-list-logo pt-0" style="width: 100%; height:110px">
                  <img class="" src="../images/publicites/<?= $publicite->image ?>" style="width:100%; height: 100%" alt="">
                </div>
                <div class="employers-list-details">
                  <div class="employers-list-info">
                    <div class="employers-list-title">
                      <h5 class="mb-0"><a href="#"><?= $publicite->titre ?></a></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <?php endforeach; ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Browse listing -->

<!--=================================
Category-style -->
<!-- <section class="space-ptb">
  <div class="container">
    <div class="section-title center">
      <h2 class="title">CATÉGORIES D'EMPLOI</h2>
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
</section> -->
<!--=================================
Category-style -->

<!--=================================
Why You Choose -->
<section class="bg-light">
  <div class="container-fluid p-0">
    <div class="row align-self-center m-0">
      <div class="col-md-6 p-0">
        <div class="bg-holder h-100" style="background-image: url(../images/bg/cover-bg-2.jpg); background-size: cover;"></div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="feature-content">
          <div class="row">
            <div class="col-xl-10 col-lg-12">
              <div class="section-title-02">
                <h2>Tout Savoir sur nous </h2>
              </div>
            </div>
            <p style="text-align: justify;">Plan RH inc est une firme de recrutement. Elle est spécialisée dans le recrutement et le placement de travailleurs étrangers pour le Canada. Elle est dirigée par Ekpo N’drin Louis Stéphane, conseiller en ressources humaines agrée et conseiller règlementé en immigration canadienne (CRHA-CRIC) et regroupe des spécialistes en ressources humaines et en immigration canadienne. Cette double expertise lui permet de trouver les meilleurs candidats possibles pour ses clients depuis l’étranger, pour répondre efficacement à leurs besoins en main d’oeuvre.
                Plan RH inc assure également les services de :</p>
          </div>
          <div class="align-self-center">
            <div class="row">
              <div class="col-lg-12">
                <div class="row category-style pb-2">
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-team"></i>
                    </div>
                    <h6 class="mb-2">Recrutements et Placements</h6>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-conversation"></i>
                    </div>
                    <h6 class="mb-2">Formations & Coachings</h6>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-job-3"></i>
                    </div>
                    <h6 class="mb-2">Solutions RH</h6>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-team"></i>
                    </div>
                    <h6 class="mb-2">Une équipe qui travaille avec vous</h6>
                  </div>
                </div>
                <a class="btn btn-primary" href="#">Plus</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Why You Choose -->

<!--=================================
Top Companies -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 text-center">
        <div class="section-title center">
          <h2 class="title">Nos certifications</h2>
        </div>
        <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="false" data-nav-dots="true" data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="15" data-autoheight="true">
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <img src="../images/feature-1.jpg">
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-md-0">
              <img src="../images/feature-2.jpg">
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <img src="../images/feature-3.jpg">
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-md-0">
              <img src="../images/feature-1.jpg">
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-md-0">
              <img src="../images/feature-2.jpg">
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <img src="../images/feature-3.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Top Companies -->

<!--=================================
Easiest Way to Use -->
<!-- <section class="space-ptb bg-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="section-title-02 text-center text-white">
          <h2 class="text-white">Nos services ?</h2>
          <p>Recrutements & Placements- Formations & Coachings-Consultations & Solutions RH
  Dans l’optique de mener a bien votre dotation, Plan RH inc vous assiste dès les premières heures jusqu’à compléter le processus.</p>
          <p>Suivez toutes les étape ci-dessous : </p>
        </div>
      </div>
    </div>
    <div class="row bg-holder-pattern me-md-0 ms-md-0" style="background-image: url('images/step/pattern-01.png');">
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-resume"></i>
          </div>
          <div class=" text-white">
            <h5>Créer un compte</h5>
            <p class="mb-0">Créez un compte et accédez à vos paramètres.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4 mb-md-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-recruitment"></i>
          </div>
          <div class=" text-white">
            <h5>Trouvez votre poste vacant</h5>
            <p class="mb-0">Ne vous contentez pas de trouver. Faites vous trouver. Mettez votre CV devant de grands employeurs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-0">
        <div class="feature-step text-center">
          <div class="feature-info-icon">
            <i class="flaticon-position"></i>
          </div>
          <div class=" text-white">
            <h5>Obtenez un emploi</h5>
            <p class="mb-0">Votre prochain changement de carrière commence ici.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<br>
<br>
<!--=================================
Easiest Way to Use -->

<!--=================================