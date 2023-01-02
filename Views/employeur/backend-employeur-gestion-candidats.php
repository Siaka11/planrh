

<!--=================================
Manage Candidates -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive pb-4 mb-0">
          <table class="table manage-candidates-top mb-0">
            <thead>
              <tr>
                <th>Nom et Prénoms des Candidats</th>
                <th class="text-center">Status</th>
                <th class="action text-end">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($candidats_acceptes as $candidat_accepte): ?>

                <tr class="candidates-list">
                  <td class="title">
                    <div class="thumb">
                      <img class="img-fluid" src="../images/<?= $candidat_accepte->candidat_image ?> "style="width: 80px;height: 80px;border-radius: 70%;" alt="">
                    </div>
                    <div class="candidate-list-details">
                      <div class="candidate-list-info">
                        <div class="candidate-list-title">
                          <h5 class="mb-0"><a href="#"><?= $candidat_accepte->candidat_nom ?></a></h5>
                        </div>
                        <div class="candidate-list-option">
                          <ul class="list-unstyled">
                            <li><i class="fas fa-filter pe-1"></i><?= $candidat_accepte->poste ?></li>
                            <li><i class="fas fa-map-marker-alt pe-1"></i><?= $candidat_accepte->contact ?></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="candidate-list-favourite-time text-center">
                    <a class="candidate-list-favourite order-2 text-danger" href="#"><i class="fas fa-heart"></i></a>
                    <span class="candidate-list-time order-1">Préselectionné</span>
                  </td>
                  <td>
                    <ul class="list-unstyled mb-0 d-flex justify-content-end">
                      <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="" data-original-title="view"><i class="far fa-eye"></i></a></li>
                      <!-- <li><a href="#" class="text-info" data-bs-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                      <li><a href="#" class="text-danger" data-bs-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li> -->
                    </ul>
                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
          <div class="row justify-content-center">
            <div class="col-12 text-center mt-4 mt-md-5">
              <ul class="pagination justify-content-center mb-md-4 mb-0">

                  <?php if($page_courante == 1): ?>
                        <li class="page-item disabled"> <span class="page-link b-radius-none">Précédent</span> </li>
                  <?php else: ?>
                    <li class="page-item "> <a class="page-link" href="/backend_employeur/page_candidat/<?= $page_courante - 1 ?>">Précédent</a> </li>
                  <?php endif ?>

                  <?php for($i = 1; $i <= $page_totale; $i++): ?> 

                  <?php if($i == $page_courante): ?>
                    <li class="page-item active" aria-current="page"><span class="page-link"><?= $i ?> </span> <span class="sr-only">(current)</span></li>
                  <?php else: ?>
                    <li class="page-item"><a class="page-link" href="/backend_employeur/page_candidat/<?= $i ?>"><?= $i ?></a></li>
                  <?php endif ?>
   
                  <?php endfor; ?>

                  <?php if($page_courante == $page_totale): ?>
                        <li class="page-item disabled"> <span class="page-link b-radius-none">Suivant</span> </li>
                  <?php else: ?>
                    <li class="page-item "> <a class="page-link" href="/backend_employeur/page_candidat/<?= $page_courante + 1 ?>">Suivant</a> </li>
                  <?php endif ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Manage Candidates -->
