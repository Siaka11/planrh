

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
                <!-- <i class="fas fa-search"></i> -->
                <input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Recherche....">
              </div>
            </div>
          </div>
          <div class="user-dashboard-table table-responsive">
            <table class="table table-bordered" id="myTable">
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
                      <!-- <li><a href="#" class="text-primary" data-bs-toggle="tooltip" title="Afficher"><i class="far fa-eye"></i></a></li> -->
                      <li><a href="/backend_employeur/offre/<?= $offre->id ?>" class="text-info" data-bs-toggle="tooltip" title="Modifier"><i class="fas fa-pencil-alt"></i></a></li>
                      <li><a href="/backend_employeur/deleteoffres/<?= $offre->id ?>" class="text-danger" data-bs-toggle="tooltip" title="Supprimer"><i class="far fa-trash-alt"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 text-center mt-4 mt-md-5">
              <ul class="pagination justify-content-center mb-md-4 mb-0">

                  <?php if($page_courante == 1): ?>
                        <li class="page-item disabled"> <span class="page-link b-radius-none">Précédent</span> </li>
                  <?php else: ?>
                    <li class="page-item "> <a class="page-link" href="/backend_employeur/page_offre/<?= $page_courante - 1 ?>">Précédent</a> </li>
                  <?php endif ?>

                  <?php for($i = 1; $i <= $page_totale; $i++): ?> 

                  <?php if($i == $page_courante): ?>
                    <li class="page-item active" aria-current="page"><span class="page-link"><?= $i ?> </span> <span class="sr-only">(current)</span></li>
                  <?php else: ?>
                    <li class="page-item"><a class="page-link" href="/backend_employeur/page_offre/<?= $i ?>"><?= $i ?></a></li>
                  <?php endif ?>
   
                  <?php endfor; ?>

                  <?php if($page_courante == $page_totale): ?>
                        <li class="page-item disabled"> <span class="page-link b-radius-none">Suivant</span> </li>
                  <?php else: ?>
                    <li class="page-item "> <a class="page-link" href="/backend_employeur/page_offre/<?= $page_courante + 1 ?>">Suivant</a> </li>
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
Manage Jobs -->

