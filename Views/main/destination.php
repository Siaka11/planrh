<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Recrutement <?= $ville->nom ?></h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Recrutement International</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
About -->
<section class="space-pt">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <h2>Recrutement international</h2>
        <p class="mt-3">La firme Plan RH offre un service clés en main pour favoriser le succès de votre projet. Ce service comprend trois volets qui sont : le recrutement, l’immigration et l’intégration.</p>
      </div>
      <div class="col-lg-5 mt-4 mt-lg-0">
        <img class="img-fluid" src="images/about/about-04.jpg" alt="">
      </div>
    </div>
  </div>
</section>
<!--=================================
About -->

<!--=================================
Let’s Get In Touch -->
<section class="space-ptb pt-0 m-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title-02 text-center">
          <h2>Recrutement internationale</h2>
          <p>La firme Plan RH offre un service clés en main pour favoriser le succès de votre projet. Ce service comprend trois volets qui sont : le recrutement, l’immigration et l’intégration.</p>
        </div>
      </div>
    </div>
    <form method="POST">
      <div class="row">
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" name="nom" id="nom" placeholder="Entrez Votre Nom">
        </div>
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" name="compagine" id="text" placeholder="Nom de la compagnie">
        </div>
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" name="ville" id="text" placeholder="Ville">
        </div>
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" name="adresse" id="text" placeholder="Adresse">
        </div>
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" name="email" id="Password" placeholder="Entrez votre mail">
        </div>
        <div class="form-group col-md-6 mb-3">
          <input type="text" class="form-control" name="telephone" id="phone" placeholder="Entre votre numéro de Téléphone">
        </div>
        <div class="form-group col-12 mb-0">
          <textarea rows="5" class="form-control" name="message" id="sector" placeholder="Message"></textarea>
        </div>
        <div class="col-12 text-center m-4">
        <button type="submit" class="btn btn-primary" name="envoyerMessage">Envoyer votre message</button>
          <!-- <a class="btn btn-primary" href="#">Envoyez votre message</a> -->
        </div>
      </div>
    </form>
  </div>
</section>
