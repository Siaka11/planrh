
<!--=================================
banner -->
<section class="header-inner header-inner-big bg-holder text-white" style="background-image: url(images/bg/cover-bg.png);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="job-search-field">
          <div class="job-search-item">
            <form class="form row">
              <div class="col-lg-3">
              </div>
              <!-- <div class="col-lg-5">
                <div class="form-group left-icon mb-3">
                  <input type="text" class="form-control" name="job_title" placeholder="Formation...">
                <i class="fas fa-search"></i> </div>
              </div> -->
              <div class="col-lg-2 col-sm-12">
                <!-- <div class="form-group form-action">
                  <button type="submit" class="btn btn-primary mt-0"><i class="fas fa-search-location"></i>Recherche</button>
                </div> -->
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
job-grid -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!--=================================
        right-sidebar -->
        <div class="row mb-4">
          <div class="col-12">
            <h6 class="mb-0"><span class="text-primary"><?= count($formations)?> Formations Disponibles</span></h6>
          </div>
        </div>
        <div class="job-filter mb-4 d-sm-flex align-items-center">
          <div class="job-shortby ms-sm-auto d-flex align-items-center">
            <form class="form-inline" method="POST">
              <div class="d-sm-flex align-items-center mb-0">
                <div class="short-by">
                  
                  <select class="form-control basic-select" name="filtre">
                  <?php foreach($filtres as $formation): ?>
                    <option value="<?= $formation->titre ?>"><?= $formation->titre ?></option>
                  <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <button class="btn btn-outline-primary" type="submit" name="recherche">Recherche</button>

            </form>
            <div class="filter-btn ms-sm-3 ms-auto"> 
           </div>
          </div>
        </div>

          <div class="row">
          <?php foreach($formations as $formation): ?>
            <div class="col-md-6 col-lg-4">
              <div class="job-list job-grid">
                <div class="job-list-logo">
                  <img class="img-fluid" src="images/<?= $formation->image ?>" alt="">
                </div>
                <div class="job-list-details">
                  <div class="job-list-info">
                    <div class="job-list-title">
                      <h5 class="mb-0"><a href="#"><?= $formation->titre ?></a></h5>
                    </div>
                    <div class="job-list-option">
                      <ul class="list-unstyled">
                        <li> <span>via : </span> <a href="employer-detail.html"><?= $formation->auteur ?></a> </li>
                        <li><i class="fas fa-map-marker-alt pe-1"></i><?= $formation->lieu ?></li>
                        <li><i class="fas fa-filter pe-1"></i>Du <?= $formation->date_debut ?> au <?= $formation->date_fin ?></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>

          </div>

        <!-- <div class="row">
          <div class="col-12 text-center mt-4">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled"> <span class="page-link b-radius-none">Prec</span> </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">25</a></li>
              <li class="page-item"> <a class="page-link" href="#">Suiv</a> </li>
            </ul>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</section>
<!--=================================
job-grid -->



