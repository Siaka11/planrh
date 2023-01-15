<!--=================================
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="candidates-user-info">
        <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid "  src="../images/<?= $admin->image ?>" style=" width: 100px;height: 100px;border-radius: 50%;" alt="" data-bs-target="#staticBackdrop">
                <i class="fas fa-pencil-alt" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
            </div>
            <div class="profile-avatar-info ms-4">
              <h3><?= $admin->nom ?></h3>
              <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Prendre une image</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form method='post' action='' enctype="multipart/form-data">
                      Selectionnez une image : 
                      <input type='file' name='avatar'id='file' class='form-control' ><br>
                      <input type='submit' class='btn btn-info' value='Charger' name="charger" id='btn_upload'>
                    </form>
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
</div>
<!--=================================
inner banner -->

<!--=================================
Dashboard Nav -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sticky-top secondary-menu-sticky-top">
          <div class="secondary-menu">
            <ul class="list-unstyled mb-0">

              <li><a  href="/cabinet/">Accueil</a></li>
              <!-- <li><a href="../cabinet/profil">Mon Profil</a></li> -->
              <!-- <li><a href="../cabinet/modification_pass">Modifier mon passe</a></li> -->
              <li><a href="../cabinet/actualites">Offres</a></li>
              <li><a href="../cabinet/emplois_postules">Emplois postulés</a></li>
              <li><a href="../cabinet/employeurs">Employeurs</a></li>
              <li><a href="../cabinet/candidats">Candidats</a></li>
              <li><a href="../cabinet/formations">Formations</a></li>
              <li><a class="active"  href="../cabinet/actualites">Actualités</a></li>
              <li><a href="../main/logout">Quitter</a></li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Dashboard Nav -->

<!--=================================
Manage Jobs -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box mb-0">
          <div class="row mb-4">
            <div class="col-md-4 col-sm-4 d-flex align-items-center">
              <div class="section-title-02 mb-0 ">
              <a  class="btn btn-primary mb-4" href="/cabinet/ajout_actualite">Ajouter une actualité</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="section-title-02 mb-0">
                <a  class="btn btn-primary" href="/cabinet/ajout_video">Ajouter une vidéo</a>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="section-title-02 mb-0">
                <a  class="btn btn-primary " href="/cabinet/ajout_motivation">Ajouter une motivation</a>
              </div>
            </div>

            <div class="col-md-7 col-sm-5 d-flex align-items-center">
              <div class="section-title-02 mb-0 ">
                <h4 class="mb-0">Liste des actulités</h4>
              </div>
            </div>
            <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
              <div class="search">
                <input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Recherche....">
              </div>
            </div>
          </div>
          <div class="user-dashboard-table table-responsive">
            <table class="table table-bordered" id="myTable">
              <thead class="bg-light">
                <tr >
                  <th scope="col" class="text-uppercase">à la une </th>
                  <th scope="col">Date de création de la actualite</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>
                <?php $i = 0 ?>
                <?php foreach($actualites_une  as $actualite) : ?>
                  <?php $i++ ?>
                <tr>
                  <td scope="row"> <b class="text-dark">
                    <div class="job-list-logo">
                    <img class="img-fluid" src="../images/actualites/<?= $actualite->image ?>" style="width: 200px;height: 160px;" alt="">
                    </div>
                    <p class="mb-1 mt-2"><span class="text-decoration-underline">Titre de la actualite :</span><b> <?= $actualite->titre ?></b></p>
                    <p class="mb-0 "><span class="text-decoration-underline">Description :</span> <?= $actualite->description ?></p>

                  </td>
                  <td>
                        <b class="text-primary"><?= $actualite->date_creation ?></b>
                  </td>
                  <!-- <td><i class="far fa-star"></i></td> -->
                  <td>
                    <ul class="list-unstyled mb-0 d-flex">
                      <li><a href="/cabinet/supprimer_actualite/<?= $actualite->id ?>" class="text-danger" data-bs-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <?php endforeach; ?>
               </tbody>
            </table>
          </div>

          <div class="user-dashboard-table table-responsive">
            <table class="table table-bordered" id="myTable">
              <thead class="bg-light">
                <tr >
                  <th scope="col" class="text-uppercase">Autres actualités </th>
                  <th scope="col">Date de création de la actualite</th>
                  <th scope="col">Action</th>
                  <!-- <th scope="col">Action</th> -->
                </tr>
              </thead>
              <tbody>
                <?php $i = 0 ?>
                <?php foreach($actualites_autre as $actualite) : ?>
                  <?php $i++ ?>
                <tr>
                  <td scope="row"> <b class="text-dark">
                    <div class="job-list-logo">
                    <img class="img-fluid" src="../images/actualites/<?= $actualite->image ?>" style="width: 200px;height: 160px;" alt="">
                    </div>
                    <p class="mb-1 mt-2"><span class="text-decoration-underline">Titre de la actualite :</span><b> <?= $actualite->titre ?></b></p>
                    <p class="mb-0 "><span class="text-decoration-underline">Description :</span> <?= $actualite->description ?></p>

                  </td>
                  <td>
                        <b class="text-primary"><?= $actualite->date_creation ?></b>
                  </td>
                  <!-- <td><i class="far fa-star"></i></td> -->
                  <td>
                    <ul class="list-unstyled mb-0 d-flex">
                      <li><a href="/cabinet/supprimer_actualite/<?= $actualite->id ?>" class="text-danger" data-bs-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a></li>
                    </ul>
                  </td>
                </tr>
                <?php endforeach; ?>
               </tbody>
            </table>
          </div>
          <div class="row mb-4">

            <div class="col-md-7 col-sm-5 d-flex align-items-center">
              <div class="section-title-02 mb-0 ">
                <h4 class="mb-0">Liste des vidéos</h4>
              </div>
            </div>
            <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
              <div class="search">
                <input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Recherche....">
              </div>
            </div>
            <div class="user-dashboard-table table-responsive">
              <table class="table table-bordered" id="myTable">
                <thead class="bg-light">
                  <tr >
                    <th scope="col" class="text-uppercase">Autres actualités </th>
                    <th scope="col">Date de création de la actualite</th>
                    <th scope="col">Action</th>
                    <!-- <th scope="col">Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 0 ?>
                  <?php foreach($videos as $actualite) : ?>
                    <?php $i++ ?>
                  <tr>
                    <td scope="row"> <b class="text-dark">

                      <p class="mb-1 mt-2"><span class="text-decoration-underline">Titre de la actualite :</span><b> <?= $actualite->titre ?></b></p>

                    </td>
                    <td>
                          <b class="text-primary"><?= $actualite->date_creation ?></b>
                    </td>
                    <!-- <td><i class="far fa-star"></i></td> -->
                    <td>
                      <ul class="list-unstyled mb-0 d-flex">
                        <li><a href="/cabinet/supprimer_video/<?= $actualite->id ?>" class="text-danger" data-bs-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a></li>
                      </ul>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

          </div> 
          
          <div class="row mb-4">

            <div class="col-md-7 col-sm-5 d-flex align-items-center">
              <div class="section-title-02 mb-0 ">
                <h4 class="mb-0">Liste des motivations</h4>
              </div>
            </div>
            <div class="col-md-5 col-sm-7 mt-3 mt-sm-0">
              <div class="search">
                <input type="text" class="form-control"  id="myInput" onkeyup="myFunction()" placeholder="Recherche....">
              </div>
            </div>
            <div class="user-dashboard-table table-responsive">
              <table class="table table-bordered" id="myTable">
                <thead class="bg-light">
                  <tr >
                    <th scope="col" class="text-uppercase">Autres actualités </th>
                    <th scope="col">Date de création de la actualite</th>
                    <th scope="col">Action</th>
                    <!-- <th scope="col">Action</th> -->
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 0 ?>
                  <?php foreach($motivations as $actualite) : ?>
                    <?php $i++ ?>
                  <tr>
                    <td scope="row"> <b class="text-dark">

                      <p class="mb-1 mt-2"><span class="text-decoration-underline">Titre de la actualite :</span><b> <?= $actualite->titre ?></b></p>
                      <p class="mb-0 "><span class="text-decoration-underline">Auteur :</span> <?= $actualite->auteur ?></p>
                      <p class="mb-0 "><span class="text-decoration-underline">Description :</span> <?= $actualite->description ?></p>

                    </td>
                    <td>
                          <b class="text-primary"><?= $actualite->date_creation ?></b>
                    </td>
                    <!-- <td><i class="far fa-star"></i></td> -->
                    <td>
                      <ul class="list-unstyled mb-0 d-flex">
                        <li><a href="/cabinet/supprimer_motivation/<?= $actualite->id ?>" class="text-danger" data-bs-toggle="tooltip" title="Delete"><i class="far fa-trash-alt"></i></a></li>
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
    </div>
  </div>
</section>
<!--=================================
Manage Jobs -->
