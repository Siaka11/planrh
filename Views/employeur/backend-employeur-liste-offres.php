

<!--=================================
Manage Jobs -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box mb-0">
          <div class="row mb-4">
            <div class="col-md-7 col-sm-5 d-flex align-items-center">
              <div class="section-title-02 mb-0 ">
                <h4 class="mb-0">Liste des Offres d'emplois</h4>
              </div>
            </div>
            <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
              <div class="search">
                <i class="fas fa-search"></i>
                <input type="text" class="form-control" placeholder="Recherche...">
              </div>
            </div>
          </div>
          <div class="user-dashboard-table table-responsive">
            <table class="table table-bordered">
              <thead class="bg-light">
                <tr >
                  <th scope="col">Titre de l'offre</th>
                  <th scope="col">Domaine de l'entreprise</th>
                  <th scope="col">Emploi</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $i = 0 ?>
                <?php foreach( $offremodel as $offre):?>
                  <?php $i++ ?>
                <tr>
                  <th scope="row">offre <?= $i ?> : <?= $offre->titre ?>
                    <p class="mb-1 mt-2">Date d'expiration: <?= $offre->date_expiration ?></p>
                    <p class="mb-0">Adresse: <?= $offre->adresse ?></p>
                  </th>
                  <?php  
                      //var_dump($domaineModel);
                      $domaine = $domaineModel->domaine_employeur($offre->domaine); 
                      //var_dump($domaine->nom)
                  ?>
                  <td><?= $domaine->nom ?></td>
                  <td><?= $offre->titre ?></td>
                  
                  <td>
                    <ul class="list-unstyled mb-0 d-flex">
                      <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="Afficher"><i class="far fa-eye"></i></a></li>
                      <li><a href="#" class="text-info" data-bs-toggle="tooltip" title="Modifier"><i class="fas fa-pencil-alt"></i></a></li>
                      <li><a href="deleteoffres/<?= $offre->id ?>" class="text-danger" data-bs-toggle="tooltip" title="Supprimer"><i class="far fa-trash-alt"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 text-center">
              <ul class="pagination mt-3">
                <li class="page-item disabled me-auto">
                  <span class="page-link b-radius-none">Prec</span>
                </li>
                <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item ms-auto">
                  <a class="page-link" href="#">Suiv</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Manage Jobs -->

