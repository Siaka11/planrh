

<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-primary"><?= $offre->titre ?></h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="/main"> Domaine </a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span><?= $offre->domaine_nom ?></span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<div class="container">
    <div class="row" style="text-align:center;">
      <div class="col-12 section-title-02">
        <h5 class="text-center">Description : <span style="font-size: 12px"> <?= $offre->offre_description ?></span></h5>
        <p class="m-3"><?= $offre->competence ?></p>
        

    </div>
  </div>
</div> 

<!-- <div class="container">
    <div class="row" style="text-align:center;">
      <div class="col-12 section-title-02">
        <h5 class="text-center">Compétence : <span style="font-size: 12px"> <?= $offre->competence ?></span></h5>
        <p class="m-3"><?= $offre->competence ?></p>
        

    </div>
  </div>
</div>  -->


<section class="space-ptb">
  <div class="row ">

    <div class="col-1 ">
      <div class="postuler-btn mt-5">
        <div class="postuler-content">
        <b class="compteurPostuler d-none" > <?= ($postuler_by_id) ? "1" : "0"  ?></b> 
          <span class="text">
            Postuler
          </span>
        </div>
      </div>
    </div>

    <div class="col-1 ">
      <div class="heart-btn1 mt-5">
          <div class="content">
            <span class="heart"></span>
            <span class="text">
              <b class="compteurLike" > <?= count($aime_offres) ?></b> 
              Like
              <p class="d-none likeCandidat"><?= ($offre_by_id) ? "1" : "0" ?></p>
              <p class="d-none offre_id"><?= $id ?></p>
            </span>
          </div>
        </div>
    </div>
    
  </div>

</section>
<!--=================================
Service -->

