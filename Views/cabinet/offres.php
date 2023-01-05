

<!--=================================
Manage Candidates -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
        <div class="search mb-4">
          <!-- <i class="fas fa-search"></i> -->
          <input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Recherche....">
        </div>
      </div>
        <div class="user-dashboard-info-box table-responsive pb-4 mb-0">
          <table class="table manage-candidates-top mb-0" >
            <thead>
              <tr>
                <th>Titre de l'offre</th>
                <th class="text-center">domaine</th>
                <th class="text-center">Employeur</th>
                <th class="text-center">Date de création</th>
                <th class="text-center">Etat</th>
                <th class="action text-end">Action</th>
              </tr>
            </thead>
            <tbody id="myTable">
              <?php foreach($offres as $offre): ?>

                <tr class="candidates-list">
                  <td class="title">
                  <div class="profile-avatar m-2">
                    <img class="img-fluid "  src="../images/<?= $offre->employeur_image ?>" style=" width: 50px;height: 50px;border-radius: 50%;" alt="" data-bs-target="#staticBackdrop">
                  </div>
                    <div class="candidate-list-details">
                      <div class="candidate-list-info">
                        <div class="candidate-list-title">
                          <h5 class="mb-0"><a href="#"><?= $offre->titre  ?></a></h5>
                        </div>
                        <div class="candidate-list-option">
                          <ul class="list-unstyled">
                            <li><i class="fas fa-users pe-1"></i><?= $offre->domaine_nom ?></li>
                          </ul>
                        </div>
                        <div class="candidate-list-option">
                          <ul class="list-unstyled">
                            <li><i class="fas fa-map-marker-alt pe-1"></i><?= $offre->typeemploi_nom ?></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="candidate-list-favourite-time text-center">
                    <span class="candidate-list-time order-1"><?= $offre->titre ?></span>
                  </td>
                  <td class="candidate-list-favourite-time text-center">
                    <?= $offre->employeur_entreprise ?>
                  </td>
                  <td class="candidate-list-favourite-time text-center">
                    <span class="candidate-list-time order-1">
                      <?= $offre->offre_date_creation ?>
                    </span>
                  </td>
                  <td class="candidate-list-favourite-time text-center">
                    <span class="candidate-list-time order-1">
                      <?php if($offre->etat == 1): ?>
                        <b class="text-success"> Activé</b>
                      <?php else: ?>
                        <b class="text-danger">Désactivé</b>

                      <?php endif ?>
                    </span>
                  </td>
                  <td>
                    <ul class="list-unstyled mb-0 d-flex justify-content-end">
                      <li><a href="#" class="text-primary" data-bs-toggle="modal" data-bs-target="#changeacceptation<?= $offre->offre_id ?>"><i class="fa-solid fa-list"></i></a></li>
                      <!-- Modal -->
                      <div class="modal fade" id="changeacceptation<?= $offre->offre_id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <form method = "POST">
                              <select class="form-select" name="activation">
                                <option style = ""  >Veuilez selectioner un item</option>
                                <option value="0">Désactivé</option>
                                <option value="1">Activé</option>
                              </select>
                              </div>
                              <div class="modal-footer">
                                <input type="hidden" name = "id" value="<?= $offre->offre_id?>" >
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermez</button>
                                <button type="submit" name="activation_offre" class="btn btn-primary">Confirmez</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </ul>
                  </td>
                </tr>
              <?php endforeach; ?>

            </tbody>
          </table>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Manage Candidates -->
