<!DOCTYPE html>
<html lang="fr">
  
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Plan Rh" />
    <meta name="description" content="Site de recrutement et de placement" />
    <meta name="author" content="Ange Brou" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Modification Du CV | Plan RH</title>

    <!-- Favicon -->
    <link href="../images/log.png" rel="shortcut icon" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="../css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="../css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css" />
    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="../css/datetimepicker/datetimepicker.min.css" />
    <link rel="stylesheet" href="../css/select2/select2.css" />
    <!-- Template Style -->
    <link rel="stylesheet" href="../css/style.css" />
  </head>
  <body>

    <!--=================================
    inner banner -->
    <div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="candidates-user-info">
          <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid " src="../images/avatar/06.jpg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ms-4">
              <h3>Ange Brou</h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width:85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
            <span class="progress-bar-number">85%</span>
          </div>
        </div>
        <div class="candidates-skills">
          <div class="candidates-skills-info">
            <h3 class="text-primary">85%</h3>
          </div>
          <div class="candidates-required-skills ms-auto mt-sm-0 mt-3">
            <a class="btn btn-dark" href="#">Ajoutez une compétence</a>
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
                  <li><a href="index.php">Accueil</a></li>
                  <li><a href="backend-candidat-profil.php">Mon Profil</a></li>
                  <li><a href="backend-candidat-modification-pass.php">Modifier Mon Pass</a></li>
                  <li><a href="backend-candidat-cv.php" target="_blank">Mon CV</a></li>
                  <li><a class="active" href="backend-candidat-modification-cv.php">Modifier Mon CV</a></li>
                  <li><a href="backend-liste-emplois.php">Emplois</a></li>
                  <li><a href="backend-candidat-emplois-enregistres.php">Emploi Enregistré</a></li>
                  <li><a href="../login.php">Quitter</a></li>
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
    My Resume -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="section-title-02">
          <h3>My Resume</h3>
        </div>
      </div>
      <div class="col-lg-4 text-lg-end">
        <a class="btn btn-primary btn-md mb-4 mb-lg-0" href="backend-candidat-cv.php" target="_blank">Aperçu de mon CV</a>
      </div>
      <div class="col-12">
        <div class="user-dashboard-info-box">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Formations</h4>
            </div>
            <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse" href="#dateposted" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter un Formation</a>
          </div>
          <div class="collapse show" id="dateposted">
            <div class="bg-light p-3 mt-4">
              <form class="row">
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Titre</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-6 select-border">
                  <label class="form-label">Année</label>
                  <select class="form-control basic-select">
                    <option value="value 01" selected="selected">2020</option>
                    <option value="value 02">2008</option>
                    <option value="value 03">2009</option>
                    <option value="value 04">2010</option>
                    <option value="value 05">2011</option>
                    <option value="value 06">2012</option>
                    <option value="value 07">2013</option>
                    <option value="value 08">2014</option>
                    <option value="value 09">2015</option>
                    <option value="value 10">2016</option>
                    <option value="value 11">2017</option>
                    <option value="value 12">2018</option>
                    <option value="value 13">2019</option>
                    <option value="value 14">2020</option>
                    <option value="value 15">2021</option>
                    <option value="value 16">2022</option>
                  </select>
                </div>
                <div class="form-group mb-3 col-md-6">
                  <label class="form-label">Etablissement de formation</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Description</label>
                  <textarea class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group col-md-12 mb-0">
                  <a class="btn btn-md btn-primary" href="#">Ajouter</a>
                </div>
              </form>
            </div>
          </div>
          <div class="jobber-candidate-timeline mt-4">
            <div class="jobber-timeline-icon">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <div class="jobber-timeline-item">
              <div class="jobber-timeline-cricle">
                <i class="far fa-circle"></i>
              </div>
              <div class="jobber-timeline-info">
                <div class="dashboard-timeline-info">
                  <div class="dashboard-timeline-edit">
                    <ul class="list-unstyled d-flex">
                      <li><a class="text-end" data-bs-toggle="collapse" href="#dateposted-02" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                      <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a></li>
                    </ul>
                  </div>
                  <span class="jobber-timeline-time">2018 - 2019</span>
                  <h6 class="mb-2">Formation</h6>
                  <span>- Etablissement</span>
                  <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate placerat nunc eu sollicitudin. Nulla leo est, aliquam et nisi pellentesque, pellentesque commodo urna.</p>
                </div>
                <div class="collapse show" id="dateposted-02">
                  <div class="bg-light p-3">
                    <form class="row collapse show" id="dateposted-01">
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Titre</label>
                        <input type="text" class="form-control" value="Titre de la formation">
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border">
                        <label class="form-label">Année</label>
                        <select class="form-control basic-select">
                          <option value="value 01" selected="selected">2020</option>
                          <option value="value 02">2008</option>
                          <option value="value 03">2009</option>
                          <option value="value 04">2010</option>
                          <option value="value 05">2011</option>
                          <option value="value 06">2012</option>
                          <option value="value 07">2013</option>
                          <option value="value 08">2014</option>
                          <option value="value 09">2015</option>
                          <option value="value 10">2016</option>
                          <option value="value 11">2017</option>
                          <option value="value 12">2018</option>
                          <option value="value 13">2019</option>
                          <option value="value 14">2020</option>
                          <option value="value 15">2021</option>
                          <option value="value 16">2022</option>
                        </select>
                      </div>
                      <div class="form-group mb-3 col-md-6">
                        <label class="form-label">Etablissement de formation</label>
                        <input type="text" class="form-control" value="Etablissement">
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Description de la formation</label>
                        <textarea class="form-control" rows="4" placeholder="descrisption de la formation."></textarea>
                      </div>
                      <div class="form-group col-md-12 mb-0">
                        <a class="btn btn-md btn-primary" href="#">Mittre à jour</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="jobber-timeline-item mb-0">
              <div class="jobber-timeline-cricle">
                <i class="far fa-circle"></i>
              </div>
              <div class="jobber-timeline-info">
                <div class="dashboard-timeline-info">
                  <div class="dashboard-timeline-edit">
                    <ul class="list-unstyled d-flex">
                      <li><a class="text-end" data-bs-toggle="collapse" href="#dateposted-03" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                      <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a></li>
                    </ul>
                  </div>
                  <span class="jobber-timeline-time">2014 - 2018</span>
                  <h6 class="mb-2">Formation</h6>
                  <span>- Etablisement de le formation</span>
                  <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate placerat nunc eu sollicitudin. Nulla leo est, aliquam et nisi pellentesque, pellentesque commodo urna.</p>
                </div>
                <div class="collapse" id="dateposted-03">
                  <div class="bg-light p-3">
                    <form class="row collapse show" id="dateposted-04">
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Titre</label>
                        <input type="text" class="form-control" value="Titre de la formation">
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border">
                        <label class="form-label">Année</label>
                        <select class="form-control basic-select">
                          <option value="value 01" selected="selected">2020</option>
                          <option value="value 02">2008</option>
                          <option value="value 03">2009</option>
                          <option value="value 04">2010</option>
                          <option value="value 05">2011</option>
                          <option value="value 06">2012</option>
                          <option value="value 07">2013</option>
                          <option value="value 08">2014</option>
                          <option value="value 09">2015</option>
                          <option value="value 10">2016</option>
                          <option value="value 11">2017</option>
                          <option value="value 12">2018</option>
                          <option value="value 13">2019</option>
                          <option value="value 14">2020</option>
                          <option value="value 15">2021</option>
                          <option value="value 16">2022</option>
                        </select>
                      </div>
                      <div class="form-group mb-3 col-md-6">
                        <label class="form-label">Etablissement de la formation</label>
                        <input type="text" class="form-control" value="Etablissement">
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Description de la formation</label>
                        <textarea class="form-control" rows="4" placeholder="Description de la formation."></textarea>
                      </div>
                      <div class="form-group col-md-12 mb-0">
                        <a class="btn btn-md btn-primary" href="#">Mettre à jour</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=================================
        Work & Experience -->
        <div class="user-dashboard-info-box">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Expériences Professionnelle</h4>
            </div>
            <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse" href="#dateposted-05" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter une expérience</a>
          </div>
          <div class="collapse show" id="dateposted-05">
            <div class="bg-light p-3 mt-4">
              <form class="row">
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Titre</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Nom de l'Entreprise</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="mb-3 col-md-6 datetimepickers">
                  <label class="form-label">De</label>
                  <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" value="08/11/2010" data-target="#datetimepicker-01">
                    <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                  <label class="form-label">au</label>
                  <div class="input-group date" id="datetimepicker-02" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" value="08/10/2012" data-target="#datetimepicker-02">
                    <div class="input-group-append d-flex" data-target="#datetimepicker-02" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Description</label>
                  <textarea class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group col-md-12 mb-0">
                  <a class="btn btn-md btn-primary" href="#">Ajouter</a>
                </div>
              </form>
            </div>
          </div>
          <div class="jobber-candidate-timeline mt-4">
            <div class="jobber-timeline-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <div class="jobber-timeline-item">
              <div class="jobber-timeline-cricle">
                <i class="far fa-circle"></i>
              </div>
              <div class="jobber-timeline-info">
                <div class="dashboard-timeline-info">
                  <div class="dashboard-timeline-edit">
                    <ul class="list-unstyled d-flex">
                      <li><a class="text-end" data-bs-toggle="collapse" href="#dateposted-06" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                      <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a></li>
                    </ul>
                  </div>
                  <span class="jobber-timeline-time">Du 01-06-2020 au 08-6-2021</span>
                  <h6 class="mb-2">Titre du poste</h6>
                  <span>- Entreprise</span>
                  <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate placerat nunc eu sollicitudin. Nulla leo est, aliquam et nisi pellentesque, pellentesque commodo urna.</p>
                </div>
                <div class="collapse show" id="dateposted-06">
                  <div class="bg-light p-3">
                    <form class="row collapse show" id="dateposted-form-01">
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Titre du poste</label>
                        <input type="text" class="form-control" value="Titre du poste">
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Nom de l'entreprise</label>
                        <input type="text" class="form-control" value="Nom de l'entreprise">
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                        <label class="form-label">Du</label>
                        <div class="input-group date" id="datetimepicker-05" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" value="01/06/2020" data-target="#datetimepicker-05">
                          <div class="input-group-append d-flex" data-target="#datetimepicker-05" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                        <label class="form-label">Au</label>
                        <div class="input-group date" id="datetimepicker-06" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" value="08/6/2021" data-target="#datetimepicker-06">
                          <div class="input-group-append d-flex" data-target="#datetimepicker-06" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-3 col-md-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="4" placeholder="Description du poste."></textarea>
                      </div>
                      <div class="form-group col-md-12 mb-0">
                        <a class="btn btn-md btn-primary" href="#">Mettre à jour</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="jobber-timeline-item mb-0">
              <div class="jobber-timeline-cricle">
                <i class="far fa-circle"></i>
              </div>
              <div class="jobber-timeline-info">
                <div class="dashboard-timeline-info">
                  <div class="dashboard-timeline-edit">
                    <ul class="list-unstyled d-flex">
                      <li><a class="text-end" data-bs-toggle="collapse" href="#dateposted-07" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                      <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a></li>
                    </ul>
                  </div>
                  <span class="jobber-timeline-time">Du 10-07-2018 Au 12-12-2019</span>
                  <h6 class="mb-2">Titre du Poste</h6>
                  <span>- Nom de l'entreprise</span>
                  <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate placerat nunc eu sollicitudin. Nulla leo est, aliquam et nisi pellentesque, pellentesque commodo urna.</p>
                </div>
                <div class="collapse" id="dateposted-07">
                  <div class="bg-light p-3">
                    <form class="row collapse show" id="dateposted-form-02">
                      <div class="form-group col-md-12">
                        <label class="form-label">Titre du poste</label>
                        <input type="text" class="form-control" value="Titre du poste">
                      </div>
                      <div class="form-group col-md-12">
                        <label class="form-label">Nom de la compagnie</label>
                        <input type="text" class="form-control" value="Nom de la compagnie">
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                        <label class="form-label">Du</label>
                        <div class="input-group date" id="datetimepicker-07" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" value="10-07-2018" data-target="#datetimepicker-07">
                          <div class="input-group-append d-flex" data-target="#datetimepicker-07" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                        <label class="form-label">Au</label>
                        <div class="input-group date" id="datetimepicker-08" data-target-input="nearest">
                          <input type="text" class="form-control datetimepicker-input" value="12-12-2019" data-target="#datetimepicker-08">
                          <div class="input-group-append d-flex" data-target="#datetimepicker-08" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" rows="4" placeholder="Description du poste"></textarea>
                      </div>
                      <div class="form-group col-md-12 mb-0">
                        <a class="btn btn-md btn-primary" href="#">Mettre à jour</a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=================================
        Work & Experience -->
        <!--=================================
        Professional Skill -->
        <div class="user-dashboard-info-box">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Compétences Professionnelles</h4>
            </div>
            <a class="btn btn-md ms-sm-auto btn-primary" href="#">Ajouter une compétence</a>
          </div>
          <div class="collapse show" id="dateposted-11">
            <div class="bg-light p-3 mt-4">
              <form class="row align-items-center">
                <div class="form-group mb-3 col-md-6">
                  <label class="form-label">Titre</label>
                  <input type="text" class="form-control" value="compétence">
                </div>
                <div class="form-group mb-3 col-md-5">
                  <label class="form-label">Pourcentage</label>
                  <input type="text" class="form-control" value="70%">
                </div>
                <div class="form-group mb-3 col-md-1 text-center">
                  <a class="mt-3 d-block" href="#"><i class="far fa-trash-alt text-danger"></i></a>
                </div>
              </form>
              <form class="row align-items-center">
                <div class="form-group mb-3 col-md-6">
                  <label class="form-label">Titre</label>
                  <input type="text" class="form-control" value="compétence 01">
                </div>
                <div class="form-group mb-3 col-md-5">
                  <label class="form-label">Pourcentage</label>
                  <input type="text" class="form-control" value="55%">
                </div>
                <div class="form-group mb-3 col-md-1 text-center">
                  <a class="mt-3 d-block" href="#"><i class="far fa-trash-alt text-danger"></i></a>
                </div>
              </form>
              <form class="row align-items-center">
                <div class="form-group mb-3 col-md-6">
                  <label class="form-label">Titre</label>
                  <input type="text" class="form-control" value="compétence 02">
                </div>
                <div class="form-group mb-3 col-md-5">
                  <label class="form-label">Pourcentage</label>
                  <input type="text" class="form-control" value="80%">
                </div>
                <div class="form-group mb-3 col-md-1 text-center">
                  <a class="mt-3 d-block" href="#"><i class="far fa-trash-alt text-danger"></i></a>
                </div>
              </form>
              <form class="row align-items-center">
                <div class="form-group col-md-6">
                  <label class="form-label">Titre</label>
                  <input type="text" class="form-control" value="compétence 03">
                </div>
                <div class="form-group col-md-5">
                  <label class="form-label">Pourcentage</label>
                  <input type="text" class="form-control" value="60%">
                </div>
                <div class="form-group col-md-1 text-center">
                  <a class="mt-3 d-block" href="#"><i class="far fa-trash-alt text-danger"></i></a>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--=================================
        Professional Skill -->
        <!--=================================
        Awards -->
        <div class="user-dashboard-info-box">
          <div class="dashboard-resume-title d-flex align-items-center">
            <div class="section-title-02 mb-sm-0">
              <h4 class="mb-0">Récompences</h4>
            </div>
            <a class="btn btn-md ms-sm-auto btn-primary" data-bs-toggle="collapse" href="#dateposted-15" role="button" aria-expanded="false" aria-controls="dateposted">Ajouter une récompense</a>
          </div>
          <div class="collapse show" id="dateposted-15">
            <div class="bg-light p-3 mt-4">
              <form class="row">
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Titre de la récompense</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Institution</label>
                  <input type="text" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                  <label class="form-label">Du</label>
                  <div class="input-group date" id="datetimepicker-09" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" value="07/03/2010" data-target="#datetimepicker-09">
                    <div class="input-group-append d-flex" data-target="#datetimepicker-09" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                  <label class="form-label">Au</label>
                  <div class="input-group date" id="datetimepicker-10" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" value="08/10/2011" data-target="#datetimepicker-10">
                    <div class="input-group-append d-flex" data-target="#datetimepicker-10" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Description</label>
                  <textarea class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group col-md-12 mb-0">
                  <a class="btn btn-md btn-primary" href="#">Ajouter</a>
                </div>
              </form>
            </div>
            <div class="jobber-candidate-timeline mt-4">
              <div class="jobber-timeline-icon">
                <i class="fas fa-trophy"></i>
              </div>
              <div class="jobber-timeline-item">
                <div class="jobber-timeline-cricle">
                  <i class="far fa-circle"></i>
                </div>
                <div class="jobber-timeline-info">
                  <div class="dashboard-timeline-info">
                    <div class="dashboard-timeline-edit">
                      <ul class="list-unstyled d-flex">
                        <li><a class="text-end" data-bs-toggle="collapse" href="#dateposted-16" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                        <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a></li>
                      </ul>
                    </div>
                    <span class="jobber-timeline-time">2008 - 2012</span>
                    <h6 class="mb-2">Titre de la Recompence</h6>
                    <span>- Institution</span>
                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate placerat nunc eu sollicitudin. Nulla leo est, aliquam et nisi pellentesque, pellentesque commodo urna.</p>
                  </div>
                  <div class="collapse show" id="dateposted-16">
                    <div class="bg-light p-3">
                      <form class="row collapse show" id="dateposted-form-07">
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Titre</label>
                          <input type="text" class="form-control" value="Titre de la Recompence">
                        </div>
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Institution</label>
                          <input type="text" class="form-control" value="Institution">
                        </div>
                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                          <label class="form-label">Du</label>
                          <div class="input-group date" id="datetimepicker-11" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" value="08/11/1999" data-target="#datetimepicker-11">
                            <div class="input-group-append d-flex" data-target="#datetimepicker-11" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                          <label class="form-label">Au</label>
                          <div class="input-group date" id="datetimepicker-12" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" value="08/11/1999" data-target="#datetimepicker-12">
                            <div class="input-group-append d-flex" data-target="#datetimepicker-12" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Description</label>
                          <textarea class="form-control" rows="4" placeholder="Descriptionde la Recompence"></textarea>
                        </div>
                        <div class="form-group col-md-12 mb-0">
                          <a class="btn btn-md btn-primary" href="#">Mettre à jour</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="jobber-timeline-item mb-0">
                <div class="jobber-timeline-cricle">
                  <i class="far fa-circle"></i>
                </div>
                <div class="jobber-timeline-info">
                  <div class="dashboard-timeline-info">
                    <div class="dashboard-timeline-edit">
                      <ul class="list-unstyled d-flex">
                        <li><a class="text-end" data-bs-toggle="collapse" href="#dateposted-17" role="button" aria-expanded="false" aria-controls="dateposted"> <i class="fas fa-pencil-alt text-info me-2"></i> </a></li>
                        <li><a href="#"><i class="far fa-trash-alt text-danger"></i></a></li>
                      </ul>
                    </div>
                    <span class="jobber-timeline-time">2012 - 2014</span>
                    <h6 class="mb-2">Recompence</h6>
                    <span>- Institution</span>
                    <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vulputate placerat nunc eu sollicitudin. Nulla leo est, aliquam et nisi pellentesque, pellentesque commodo urna.</p>
                  </div>
                  <div class="collapse" id="dateposted-17">
                    <div class="bg-light p-3">
                      <form class="row collapse show" id="dateposted-form-08">
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Titre</label>
                          <input type="text" class="form-control" value="Titre de la Recompence">
                        </div>
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Institution</label>
                          <input type="text" class="form-control" value="Institution">
                        </div>
                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                          <label class="form-label">Du</label>
                          <div class="input-group date" id="datetimepicker-13" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" value="08/11/1999" data-target="#datetimepicker-13">
                            <div class="input-group-append d-flex" data-target="#datetimepicker-13" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-3 col-md-6 select-border datetimepickers">
                          <label class="form-label">Au</label>
                          <div class="input-group date" id="datetimepicker-14" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" value="08/11/1999" data-target="#datetimepicker-14">
                            <div class="input-group-append d-flex" data-target="#datetimepicker-14" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mb-3 col-md-12">
                          <label class="form-label">Description</label>
                          <textarea class="form-control" rows="4" placeholder="Description de la Recompence"></textarea>
                        </div>
                        <div class="form-group col-md-12 mb-0">
                          <a class="btn btn-md btn-primary" href="#">Mettre à jour</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--=================================
        Awards -->
        <a class="btn btn-md btn-primary" href="#">Enregistrez</a>
      </div>
    </div>
  </div>
</section>
    <!--=================================
    My Resume -->
    <!--=================================
    footer -->
  <footer class="footer mt-5 mt-md-5 pt-0">
    <div class="footer-bottom bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ">
            <div class="d-flex justify-content-md-start justify-content-center">
              <ul class="list-unstyled d-flex mb-0">
                <li><a href="#">FAQ</a></li>
                <li><a href="../#">A propos de nous</a></li>
                <li><a href="../contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 text-center text-md-end mt-4 mt-md-0">
            <p class="mb-0"> &copy;Copyright <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> All Rights Reserved | Design By <a href="#">Ange Brou</a></p>
          </div>
        </div>
      </div>
    </div>
</footer>
    <!--=================================
    footer -->
  

    <!--=================================
    Javascript -->
    <!-- JS Global Compulsory (Do not remove)-->
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/popper/popper.min.js"></script>
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="../js/select2/select2.full.js"></script>
    <script src="../js/datetimepicker/moment.min.js"></script>
    <script src="../js/datetimepicker/datetimepicker.min.js"></script>
    <!-- Template Scripts (Do not remove)-->
    <script src="../js/custom.js"></script>
  </body>
</html>
