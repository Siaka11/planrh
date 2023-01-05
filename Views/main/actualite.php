
<style>


    .playlist {
      width: 100%;
      float: left;
    }

    .playlist ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .playlist li {
      list-style: none;
      cursor: pointer;
      padding-bottom: 10px;
      border-bottom: 1px solid #ddd;
    }

    .playlist li:hover {
      background-color: #26aeef;
      color: white
    }
</style>
<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary">Actualité</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Toute l'actualité du monde du travail</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
blog -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
          <div class="blog-post text-center">
            <div class="blog-post-image">
              <img class="img-fluid video-player" id="video" src="images/actualites/<?= $actualites_der->image ?>" alt="">
            </div>
            <div class="blog-post-content">
              <div class="blog-post-details">
                <div class="blog-post-title">
                  <h4 id="titre"><?= $actualites_der->titre ?></h4>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0" id="description"><?= $actualites_der->description ?></p>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"><i class="far fa-clock"></i><?= $actualites_der->date_creation ?></a>
                </div>
                <!-- <div class="blog-post-time">
                  <a href="#"><i class="far fa-comment"></i>(4)</a>
                </div> -->
                <div class="blog-post-share">
                  <div class="share-box">
                    <a href="#"> <i class="fas fa-share-alt"></i><span class="ps-2">Partagez</span></a>
                    <ul class="list-unstyled share-box-social">
                      <li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-twitter"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-linkedin"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-instagram"></i></a> </li>
                      <li> <a href="#"><i class="fab fa-pinterest"></i></a> </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <!-- <div class="blog-post blog-post-you-tube text-center mt-5">
          <div class="js-video [youtube, widescreen]">
            <iframe src="https://www.youtube.com/embed/nrJtHemSPW4?rel=0" allowfullscreen></iframe>
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details">
              <div class="blog-post-title">
                <h4><a href="#">Publio Reportage</a></h4>
              </div>
              <div class="blog-post-description">
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and standard dummy text ever since the 1500s.</p>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="col-lg-4 mt-4 mt-lg-0">
        <div class="blog-sidebar">
          <div class="widget">
            <div class="widget-title">
              <h5>Autres Actualités</h5>
            </div>
            <div class="playlist">
              <?php foreach($actualites as $actualite): ?>
              <div class="d-flex align-items-start">
                <div class="avatar avatar-xl">
                  <img data-image="images/actualites/<?= $actualite->image ?>" data-titre ="<?= $actualite->titre ?>" data-description="<?= $actualite->description ?>" class="img-fluid" src="images/actualites/<?= $actualite->image ?>" alt="">
                </div>
                <div class="ms-3 recent-posts">
                  <li data-image="images/actualites/<?= $actualite->image ?>" data-titre ="<?= $actualite->titre ?>" data-description="<?= $actualite->description ?>"><?= $util->texte_cinquante($actualite->titre)  ?></li>
                  <p class="d-none" ><?= $actualite->titre ?></p>
                  <p class="d-block font-sm mt-1 text-light" href="#"><?= $actualite->date_creation ?></p>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          
          <div class="widget">
            <div class="widget-title">
              <h5>Categories</h5>
            </div>
            <ul class="list-unstyled list-style mb-0">
              <?php foreach($tous_domaines as $tous_domaine): ?>
                <li><a href="#"><?= $tous_domaine->nom ?>
                <span class="ms-auto">
                  <?php
                     $nbre_offre = $offremodel->offre_domaine( $tous_domaine->id );              
                  ?>
                  <?= $nbre_offre ?>
                </span></a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
          <div class="widget">
            <div class="newsletter p-4 bg-dark">
              <p class="text-white mb-0">Abonnez-vous à notre newsletter pour plus d'actualités</p>
              <div class="search my-3">
                <i class="fa fa-paper-plane"></i>
                <input type="email" class="form-control" placeholder="Mail...">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="dateposted1">
                <label class="form-check-label" for="dateposted1"><em class="text-white">j'accepte que vous me faites parvenir vos actualités</em></label>
              </div>
              <div class="newsletter-bg-icon">
                <i class="far fa-envelope"></i>
              </div>
            </div>
          </div>
          <div class="widget">
            <div class="widget-title">
              <h5>Abonnez-vous & Suivez-nous : </h5>
            </div>
            <div class="social">
              <ul class="list-unstyled">
                <li class="facebook">
                  <a class="text-uppercase" href="#"> <i class="fab fa-facebook-f me-3"></i>Facebook</a>
                </li>
                <li class="twitter">
                  <a class="text-uppercase" href="#"> <i class="fab fa-twitter me-3"></i>twitter</a>
                </li>
                <li class="youtube">
                  <a class="text-uppercase" href="#"> <i class="fab fa-youtube me-3"></i>youtube</a>
                </li>
                <li class="instagram">
                  <a class="text-uppercase" href="#"> <i class="fab fa-instagram me-3"></i>instagram</a>
                </li>
                <li class="linkedin">
                  <a class="text-uppercase" href="#"> <i class="fab fa-linkedin-in me-3"></i>linkedin</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget">
            <div class="section-title mb-0">
              <h5>Publicité ici :</h5>
            </div>
            <div class="owl-carousel owl-nav-top-right" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="5">
              <div class="item">
                <div class="testimonial-item-02-small text-center">
                  <div class="testimonial-content">
                    <p>Publicité 01 </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item-02-small text-center">
                  <div class="testimonial-content">
                    <p>Publicité 02</p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item-02-small text-center">
                  <div class="testimonial-content">
                    <p>Publicité 01 </p>
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

<script>
    // Get a reference to the video player and the playlist
    const video = document.querySelector('#video');
    const playlist = document.querySelector('.playlist');
    const titre = document.querySelector('#titre');
    const description = document.querySelector('#description');

    // Add an event listener to the playlist items
    playlist.addEventListener('click', e => {
      // Get the clicked item
      const clickedItem = e.target;
      //console.log(clickedItem)

      // Get the video source from the data attribute
      const videoSource = clickedItem.getAttribute('data-image');
      const imageTitre = clickedItem.getAttribute('data-titre')
      const imageDescription = clickedItem.getAttribute('data-description')

      console.log(video.src)
      console.log("et")
      console.log(videoSource)
      var imgLinkArray = video.src.split('/');
      var imgName = imgLinkArray.pop();
      console.log("et")
      console.log(imgName)
      // Update the video source and play the video
      video.src = videoSource;
      titre.innerHTML = imageTitre
      description.innerHTML = imageDescription

    });
  </script>
<!--=================================
blog -->

