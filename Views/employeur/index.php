<!--=================================
Employer Dashboard -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box pb-0">
          <div id="chart">
          </div>
        </div>
        <div class="user-dashboard-info-box mb-0">
          <div class="section-title-02 mb-4">
            <h4>Les offres postées</h4>
          </div>
          <div class="row">
            <?php foreach($offres as $offre): ?>
              <div class="col-12">
                <div class="job-list ">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="../images/<?= $employeur->image ?>" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="#"><?= $offre->titre ?></a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li> <span>via</span> <?= $employeur->entreprise ?> </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i><?= $offre->adresse ?></li>
                          <li><i class="fas fa-filter pe-1"></i><?= $employeur->secteur ?></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time"> <a class="order-2 mb-3 d-block" href="/backend_employeur/offre/<?= $offre->id ?>">Date d'expiration</a> <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i><?= $offre->date_expiration ?></span> </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
          <!-- <div class="row">
            <div class="col-12 text-center mt-5">
              <ul class="pagination justify-content-center">
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
  </div>
</section>
<!--=================================
Employer Dashboard -->