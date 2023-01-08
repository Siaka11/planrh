

<!--=================================
banner -->
<section class="header-inner header-inner-big bg-holder text-white" style="background-image: url(../images/bg/banner-01.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="job-search-field">
          <div class="job-search-item">
            <form class="form row">
              <div class="col-lg-5">
                <div class="form-group left-icon mb-3 invisible">
                  <input type="text" class="form-control" name="job_title" placeholder="Mots Clés">
                <i class="fas fa-search"></i> 
              </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group left-icon mb-3 invisible">
                  <input type="text" class="form-control" name="job_title" placeholder="Ville..">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-2 col-sm-12">
                <div class="form-group form-action invisible">
                  <button type="submit" class="btn btn-primary mt-0"><i class="fas fa-search-location"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<!--=================================
job-list -->
<section class="space-ptb">
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <!--=================================
      left-sidebar -->
      <div class="sidebar">
        <div class="widget">
          <div class="widget-title widget-collapse">
            <h6>Date</h6>
            <a class="ms-auto" data-bs-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-chevron-down"></i> </a></div>
            <form method="POST">
              <div class="collapse show" id="dateposted">
                <div class="widget-content">
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="temps" value="0" id="dateposted1">
                    <label class="form-check-label"  for="dateposted1">Plus Rescent</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="temps" value="1" id="dateposted2">
                    <label class="form-check-label" for="dateposted2">Depuis 24h</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="temps" value="7" id="dateposted3">
                    <label class="form-check-label" for="dateposted3">Depuis 7jrs </label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="temps" value="14" id="dateposted4">
                    <label class="form-check-label" for="dateposted4">Depuis 14jrs</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" class="form-check-input" name="temps" value="30" id="dateposted5">
                    <label class="form-check-label" for="dateposted5">Depuis 30jrs</label>
                  </div>
                  <div class="job-filter-tag d-flex justify-content-start">
                          <button type="submit" class="btn-primary filter-clear" name="filtre_date">
                            Recherche<i class="fas fa-redo-alt"></i> 
                          </button>
                          <li class="invisible"><a href="#"><depuis 24h<i class="fas fa-times-circle"></i> recherche</a></li>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <hr>
          <div class="widget">
            <div class="widget-title widget-collapse">
              <h6>Domaines d'activités</h6>
              <a class="ms-auto" data-bs-toggle="collapse" href="#specialism" role="button" aria-expanded="false" aria-controls="specialism"> <i class="fas fa-chevron-down"></i> </a> 
            </div>
              <div class="collapse show" id="specialism">
                <form method="POST">
                  <div class="widget-content">
                  <?php foreach($tous_domaines as $tous_domaine): ?>
                    <div class="form-check">
                      <input type="radio" class="form-check-input" name="domaine" value="<?= $tous_domaine->id ?>" id="specialism1">
                      <label class="form-check-label" for="specialism1"><?= $tous_domaine->nom ?></label>
                    </div>
                  <?php endforeach; ?>
                  <div class="job-filter-tag d-flex justify-content-start">
                  <button type="submit" class="btn-primary filter-clear" name="filtre_domaine">
                        Recherche<i class="fas fa-redo-alt"></i> 
                    </button>
                    <li class="invisible"><a href="#"><depuis 24h<i class="fas fa-times-circle"></i> </a></li>              
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <hr>
            <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Type de Contrat</h6>
                <a class="ms-auto" data-bs-toggle="collapse" href="#jobtype" role="button" aria-expanded="false" aria-controls="jobtype"> <i class="fas fa-chevron-down"></i> </a> </div>
                <div class="collapse show" id="jobtype">
                  <form method="POST">
                  <div class="widget-content">
                    <?php foreach($typeemplois as $typeemploi): ?>
                    <div class="form-check ">
                      <input type="radio" class="form-check-input" name="typeemploi" value="<?= $typeemploi->id ?>" id="jobtype1">
                      <label class="form-check-label" for="jobtype1"><?= $typeemploi->nom ?></label>
                    </div>
                    <?php endforeach; ?>
                    <div class="job-filter-tag d-flex justify-content-start">
                    <button type="submit" class="btn-primary filter-clear" name="filtre_typeemploi">
                        Recherche<i class="fas fa-redo-alt"></i> 
                    </button>
                    <li class="invisible"><a href="#"><depuis 24h<i class="fas fa-times-circle"></i> </a></li>         
                  </div>
                  </div>
                  </form>
                </div>
              </div>
              <div class="widget">


                </div>
                <div class="widget">


                  </div>
                    </div>
                  </div>
                  <div class="col-lg-9">
                    <!--=================================
                    right-sidebar -->
                    <div class="row mb-4">
                       <div class="col-md-6">
                        <div class="section-title mb-3 mb-lg-4">
                          <h6 class="mb-0"><span class="text-primary"><?= count($offres) ?> Emplois</span></h6>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="job-filter-tag d-flex justify-content-start">
                        <ul class="list-unstyled">
                          <!-- <li><a href="#">depuis <?php  $filtre == 0 ? "Ce jour" : $filtre ; ?><i class="fas fa-times-circle"></i> </a></li> -->
                          <!-- <li><a class="filter-clear" href="#">Recherche<i class="fas fa-redo-alt"></i> </a></li> -->
                        </ul>
                      </div>
                      </div>
                    </div>
                    <div class="job-filter mb-4 d-sm-flex align-items-center">
                        <!-- <div class="job-alert-bt"> <a class="btn btn-md btn-dark" href="#"><i class="fa fa-envelope"></i>Activez une alerte</a> </div> -->
                      <div class="job-shortby ms-sm-auto d-flex align-items-center">
                      </div>
                    </div>
                    <div class="row">
                      <?php foreach($offres as $offre): ?>
                        <div class="col-12">
                          <div class="job-list ">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="../images/<?= $offre->employeur_image ?>" alt="">
                            </div>
                            <div class="job-list-details">
                              <div class="job-list-info">
                                <div class="job-list-title">
                                  <h5 class="mb-0"><a href="#"><?= $offre->titre ?></a></h5>
                                </div>
                                <div class="job-list-option">
                                  <ul class="list-unstyled">
                                    <li> <span>via</span> <a href="#"><?= $offre->entreprise ?></a> </li>
                                    <li><i class="fas fa-map-marker-alt pe-1"></i><?= $offre->adresse ?></li>
                                    <li><i class="fas fa-filter pe-1"></i><?= $offre->domaine_nom ?></li>
                                    <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i><?= $offre->typeemploi_nom ?></a></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <?php

                              $date = $util->mydateago($offre->offre_date_creation);
                              
                              
                            ?>
                            <div class="job-list-favourite-time"> 
                            <a class="job-list-favourite order-2" href="/main/offre/<?= $offre->offre_id ?>"><span style="font-size: 12px">Postuler</span></a> 
                            <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i><?= $date ?></span> 
                          </div>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                    <div class="row justify-content-center">
                      <div class="col-12 text-center mt-4 mt-md-5">
                        <ul class="pagination justify-content-center mb-md-4 mb-0">

                            <?php if($page_courante == 1): ?>
                                  <li class="page-item disabled"> <span class="page-link b-radius-none">Précédent</span> </li>
                            <?php else: ?>
                              <li class="page-item "> <a class="page-link" href="/candidat/emplois_page/<?= $page_courante - 1 ?>">Précédent</a> </li>
                            <?php endif ?>

                            <?php for($i = 1; $i <= $page_totale; $i++): ?> 

                            <?php if($i == $page_courante): ?>
                              <li class="page-item active" aria-current="page"><span class="page-link"><?= $i ?> </span> <span class="sr-only">(current)</span></li>
                            <?php else: ?>
                              <li class="page-item"><a class="page-link" href="/candidat/emplois_page/<?= $i ?>"><?= $i ?></a></li>
                            <?php endif ?>
            
                            <?php endfor; ?>

                            <?php if($page_courante == $page_totale): ?>
                                  <li class="page-item disabled"> <span class="page-link b-radius-none">Suivant</span> </li>
                            <?php else: ?>
                              <li class="page-item "> <a class="page-link" href="/candidat/emplois_page/<?= $page_courante + 1 ?>">Suivant</a> </li>
                            <?php endif ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
</section>
<!--=================================
job-list -->

