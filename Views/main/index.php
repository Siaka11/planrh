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
    <img src="images/bg-slider/01.jpg" alt="">
    <img src="images/bg-slider/02.jpg" alt="">
    <img src="images/bg-slider/03.jpg" alt="">
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
                <div class="col-sm-12">
                  <div class="form-group mb-md-0 justify-content-center">
                      <input type="text" class="form-control" name="job_title" placeholder="Poste, Entreprise...">
                    <button type="submit" class="btn btn-primary btn-lg m-0"><i class="fas fa-search"></i>Recherche</button>
                  </div>
                </div>
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
        <a class="btn btn-dark" href="#">publier un emploi</a>
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
                <a class="nav-link  active" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Emplois récents</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Emplois populaires</a>
              </li>
            </ul>
          </div>
          <div class="job-found ms-auto">
            <span class="badge badge-lg bg-primary">24123</span>
            <h6 class="ms-3 mb-0">Emplois Disponibles</h6>
          </div>
        </div>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row mt-4 filter_data">
              <div class="col-lg-6 col-sm-6">
                <div class="job-list job-grid">
                  <div class="job-list-logo ">
                    <img class="img-fluid" src="images/svg/10.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h6><a href="#">Responsable Marketing</a></h6>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via : </span>
                            <a href="#">Entreprise</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Canada</li>
                          <li><i class="fas fa-filter pe-1"></i>Technologie</li>
                          <li><a class="temporary" href="#"><i class="fas fa-suitcase pe-1"></i>Temporaire</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                  <!-- <a class="job-list-favourite order-2" ><i class="far fa-heart"></i></a> -->
                  <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2j</span>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-12 justify-content-center d-flex mt-4">
              <a class="btn btn-white btn-lg" href="#">Plus d'emplois</a>
            </div>
          </div>
          <div class="tab-pane fade active show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row mt-4 filter_data"> 
              <?php if(isset($_SESSION["user"]["id"])): ?>
                <?php foreach($emploiRecent  as $emploiRecentnew):?>
              
                  <div class="col-lg-6 col-sm-6">
                    <div class="job-list job-grid">
                      <div class="job-list-logo ">
                        <img class="img-fluid" src="images/svg/13.svg" alt="">
                      </div>
                      <div class="job-list-details">
                        <div class="job-list-info">
                          <div class="job-list-title">
                            <h6><a href="#"><?=$emploiRecentnew->titre?><?=$emploiRecentnew->id ?></a></h6>
                          </div>
                          <div class="job-list-option">
                            <ul class="list-unstyled">
                              <li>
                              <?php
                                $employeur = new EmployeurModel;
                                $jaime = new JaimeModel;

                                $new = $employeur->find($emploiRecentnew->id_employeur);
                                $jaime = $jaime->findjaimeAll($emploiRecentnew->id, $_SESSION["user"]["id"]);


                              ?>
                                
                                <span class="job-list-via"> via : <?=$new->entreprise ?></span>
                                <a class="job-list-company-name" href="#">Compagnie</a>
                              </li>
                              <li><i class="fas fa-map-marker-alt pe-1"></i><?=$emploiRecentnew->adresse ?></li>
                              <li><i class="fas fa-filter pe-1"></i><?php
                                //$date = new DateTime;
                                //var_dump(mydateago("2013-05-01 00:22:35"));
                                $date = $util->mydateago("2022-02-10 00:22:35");
                              
                              $arr = $util->seperate($emploiRecentnew->secteur);
                              echo $arr;
                              ?></li>
                              <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i><?=$emploiRecentnew->typedemande  ?></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="job-list-favourite-time" > 
                      <?php if($jaime): ?>
                      <?php foreach($jaime as $jaimeone): ?>
                                
                                    
                        <a class="job-list-favourite order-2 " > <i class="fas fa-heart favouritejaime"  data-id="<?=$emploiRecentnew->id ?>"></i></a>

                                  
                  
                          <?php endforeach; ?>
                      
                        <?php else:?>
                        <a class="job-list-favourite order-2" > <i class="far fa-heart" data-id="<?=$emploiRecentnew->id ?>"></i></a>
                        <?php endif;?>
                        <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>Durée : <?= $date;?></span>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                <?php else: ?>
                  <?php foreach($emploiRecent  as $emploiRecentnew):?>
                  <div class="col-lg-6 col-sm-6">
                    <div class="job-list job-grid">
                      <div class="job-list-logo ">
                        <img class="img-fluid" src="images/svg/13.svg" alt="">
                      </div>
                      <div class="job-list-details">
                        <div class="job-list-info">
                          <div class="job-list-title">
                            <h6><a href="#"><?=$emploiRecentnew->titre?><?=$emploiRecentnew->id ?></a></h6>
                          </div>
                          <div class="job-list-option">
                            <ul class="list-unstyled">
                              <li>
                              <?php
                                $employeur = new EmployeurModel;
                                $jaime = new JaimeModel;

                                $new = $employeur->find($emploiRecentnew->id_employeur);
                                //$jaime = $jaime->findjaimeAll($emploiRecentnew->id, $_SESSION["user"]["id"]);


                              ?>
                                
                                <span class="job-list-via"> via : <?=$new->entreprise ?></span>
                                <a class="job-list-company-name" href="#">Compagnie</a>
                              </li>
                              <li><i class="fas fa-map-marker-alt pe-1"></i><?=$emploiRecentnew->adresse ?></li>
                              <li><i class="fas fa-filter pe-1"></i><?php
                                //$date = new DateTime;
                                //var_dump(mydateago("2013-05-01 00:22:35"));
                                $date = $util->mydateago("2022-02-10 00:22:35");
                              
                              $arr = $util->seperate($emploiRecentnew->secteur);
                              echo $arr;
                              ?></li>
                              <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i><?=$emploiRecentnew->typedemande  ?></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="job-list-favourite-time" > 
                      <a class="job-list-favourite order-2" > <i class="far fa-heart" data-id="<?=$emploiRecentnew->id ?>"></i></a>



                        <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>Durée : <?= $date;?></span>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <div class="col-12 justify-content-center d-flex mb-4">
              <a class="btn btn-white btn-lg" href="#">Plus d'Emplois</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 order-lg-1">
        <div class="sidebar mb-0">
          <div class="widget bg-white p-4">
            <div class="widget-title widget-collapse">
              <h5 class ="testeur">Domaine</h5>
            </div>
            <div class="collapse show" id="specialism">
              <div class="widget-content"> 
                <?php foreach($domaine as $domaineone): ?>            
                <div class="form-check ">
                  <input class="form-check-input domaine common_selector" type="checkbox" value="<?= $domaineone->nom?>" id="specialism1<?= $domaineone->nom?>">
                  <label class="form-check-label" for="specialism1<?= $domaineone->secteur?>"><?= $domaineone->nom?></label>
                </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
          
          <div class="owl-carousel owl-nav-bottom-center mt-4" data-nav-arrow="false" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="15" data-autoheight="true">
            <div class="item">
              <div class="employers-grid bg-white py-4">
                <div class="employers-list-logo pt-0">
                  <img class="img-fluid" src="images/svg/09.svg" alt="">
                </div>
                <div class="employers-list-details">
                  <div class="employers-list-info">
                    <div class="employers-list-title">
                      <h5 class="mb-0"><a href="#">Pub 01</a></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="employers-grid bg-white py-4">
                <div class="employers-list-logo pt-0">
                  <img class="img-fluid" src="images/svg/08.svg" alt="">
                </div>
                <div class="employers-list-details">
                  <div class="employers-list-info">
                    <div class="employers-list-title">
                      <h5 class="mb-0"><a href="#">Pub 02</a></h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="employers-grid bg-white py-4">
                <div class="employers-list-logo pt-0">
                  <img class="img-fluid" src="images/svg/06.svg" alt="">
                </div>
                <div class="employers-list-details">
                  <div class="employers-list-info">
                    <div class="employers-list-title">
                      <h5 class="mb-0"><a href="#">Pub 03</a></h5>
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
</section>
<!--=================================
Browse listing -->

<!--=================================
Category-style -->
<section class="space-ptb">
  <div class="container">
    <div class="section-title center">
      <h2 class="title">CATÉGORIES D'EMPLOI</h2>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="category-style text-center">
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-account"></i>
            </div>
            <h6>Gatégorie 01</h6>
            <span class="mb-0">301 Poste Disponible </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-conversation"></i>
            </div>
            <h6>Gatégorie 02</h6>
            <span class="mb-0">287 Poste Disponible </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-money"></i>
            </div>
            <h6>Gatégorie 03</h6>
            <span class="mb-0">542 Poste Disponible </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-mortarboard"></i>
            </div>
            <h6>Education</h6>
            <span class="mb-0">785 Poste Disponible </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-worker"></i>
            </div>
            <h6>Gatégorie 04</h6>
            <span class="mb-0">862 Poste Disponible </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-businessman"></i>
            </div>
            <h6>Estate Agency</h6>
            <span class="mb-0">423 Poste Disponible </span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-coding"></i>
            </div>
            <h6>Gatégorie 05</h6>
            <span class="mb-0">253 Poste Disponible</span>
          </a>
          <a href="#" class="category-item">
            <div class="category-icon mb-4">
              <i class="flaticon-balance"></i>
            </div>
            <h6>Gatégorie 06</h6>
            <span class="mb-0">689 Poste Disponible</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Category-style -->

<!--=================================
Why You Choose -->
<section class="bg-light">
  <div class="container-fluid p-0">
    <div class="row align-self-center m-0">
      <div class="col-md-6 p-0">
        <div class="bg-holder h-100" style="background-image: url(images/bg/cover-bg-2.jpg); background-size: cover;"></div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-12">
        <div class="feature-content">
          <div class="row">
            <div class="col-xl-10 col-lg-12">
              <div class="section-title-02">
                <h2>Tout Savoir sur nous </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
              </div>
            </div>
          </div>
          <div class="align-self-center">
            <div class="row">
              <div class="col-lg-12">
                <div class="row category-style pb-2">
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-team"></i>
                    </div>
                    <h6 class="mb-2">Une équipe qui travaille avec vous</h6>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-chat"></i>
                    </div>
                    <h6 class="mb-2">Des services de recrutement et de ressources humaines flexibles</h6>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-job-3"></i>
                    </div>
                    <h6 class="mb-2">Un partenariat d’affaires humain</h6>
                  </div>
                  <div class="col-md-6 col-sm-12 mb-3">
                    <div class="category-icon mb-3">
                      <i class="flaticon-job-2"></i>
                    </div>
                    <h6 class="mb-2">10 succursales à travers le Canada</h6>
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
          <h2 class="title">ils nous font Confiance</h2>
        </div>
        <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="false" data-nav-dots="true" data-items="4" data-md-items="3" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="15" data-autoheight="true">
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/07.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="#">Client 01</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Siège Social</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">30 Postes Ouverts</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-md-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/08.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="#">Client 02</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Siège Social</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">35 Postes Ouverts</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/09.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="#">Client 03</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Siège Social</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">30 Postes Ouverts</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-md-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/10.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="#">Client 04</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Siège Social</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">35 Postes Ouverts</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/11.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="#">Client 05</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Siège Social</li>
                    </ul>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">20 Postes Ouverts</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/12.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="#">Client 06</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Siège Social</li>
                    </ul>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">25 Postes Ouverts</a>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-md-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/13.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="#">Client 07</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Siège Social</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">35 Poste ouverts</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid mb-4 mb-lg-0">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/14.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="#">Rippin LLC</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                    </ul>
                  </div>
                </div>
                <div class="employers-list-position">
                  <a class="btn btn-sm btn-dark" href="#">20 Open position</a>
                </div>
              </div>
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
<section class="space-ptb bg-primary">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="section-title-02 text-center text-white">
          <h2 class="text-white">Comment utiliser nos services ?</h2>
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
</section>
<br>
<br>
<!--=================================
Easiest Way to Use -->

<!--=================================
