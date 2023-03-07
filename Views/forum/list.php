<?php
  use App\Models\Reponse_Commentaire_Model;

?>
<!--=================================
inner banner -->
<div class="header-inner bg-light text-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>7 Things are Making your Resume look Dated</h2>
        <ol class="breadcrumb mb-0 p-0">
          <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
          <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Blog-Detail</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
blog-detail -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="blog-detail">
          <div class="blog-post">
            <div class="blog-post-title">
              <h4><?= $forum->titre ?></h4>
            </div>
            <div class="blog-post-footer border-0 justify-content-start">
              <div class="blog-post-time">
                <i class="far fa-clock"></i><?= $forum->date_creation ?>
              </div>
              <div class="blog-post-author">
                <span> par <a href="#"> <img class="img-fluid" src="images/avatar/01.jpg" alt=""><?= $forum->auteur ?></a> </span>
              </div>
              <div class="blog-post-comment">
                <!-- <a href="#"> <i class="far fa-comment"></i>(15) </a> -->
              </div>
            </div>
            <div class="blog-post-image">
              <img class="img-fluid" src="images/blog/01.jpg" alt="">
            </div>
            <div class="blog-post-content mt-4">
              <div class="blog-post-description">
                <p class="mb-0"><?= $forum->description ?></p>
                
              </div>
                <div class="mt-4">
                  <h5 class="mb-1">Espace commentaire</h5>
                  <hr class="my-5" />
                  <?php foreach($commentaire_forums as $commentaire_forum): ?>
                    <div class="d-flex mb-3">
                      <div class="avatar avatar-lg">
                        <img src="images/avatar/03.jpg" class="img-fluid rounded-circle" alt="...">
                      </div>
                      <div class="media-body ms-3 border p-4">
                        <div class="d-flex">
                          <h6 class="mt-0"><?= $commentaire_forum->nom ?> </h6>
                          <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#reponseCommentaire">
                            Répondre
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="reponseCommentaire" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Réponse</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                <form method="POST">
                                  <div class="row">
                                  <input type="hidden" name="commentaire_forum_id" value="<?= $commentaire_forum->id ?>">

                                    <div class="form-group col-md-12 mb-3">
                                      <textarea class="form-control" rows="4" placeholder="Votre message" name="description"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                    <input type="hidden" name="forum_id" value="valeur">
                                      <button type="submit" class="btn btn-primary" name="envoyerCommentaire">Envoyer votre ommentaire</button>
                                    </div>
                                  </div>
                                </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="mb-0"><?= $commentaire_forum->forum_description ?></p>
                      </div>
                    </div>
                    <?php 
                      $reponse_commentaire_forumModel = new Reponse_Commentaire_Model();
                      $reponse_commentaire_forums = $reponse_commentaire_forumModel->reponse_commentaire_forum($commentaire_forum->commentaire_id_for);
                     // var_dump($reponse_commentaire_forums);die;

                    ?>
                    <?php foreach($reponse_commentaire_forums as $reponse_commentaire_forum): ?>
                      <div class="d-flex mb-3 ms-5">
                        <div class="avatar avatar-lg">
                          <img src="images/avatar/02.jpg" class="img-fluid rounded-circle" alt="...">
                        </div>
                        <div class="media-body ms-3 border p-4">
                          <div class="d-flex">
                            <h6 class="mt-0"><?= $reponse_commentaire_forum->candidat_nom ?></h6>
                          </div>
                          <p class="mb-0">Every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer.</p>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  <?php endforeach; ?>
                  <!-- <div class="d-flex mb-3 ms-5">
                    <div class="avatar avatar-lg">
                      <img src="images/avatar/02.jpg" class="img-fluid rounded-circle" alt="...">
                    </div>
                    <div class="media-body ms-3 border p-4">
                      <div class="d-flex">
                        <h6 class="mt-0">John Doe</h6>
                        <a class="ms-auto" href="#"><i class="fas fa-reply pe-2"></i>Reply</a>
                      </div>
                      <p class="mb-0">Every possible setback. Commit the plan to paper and then keep it with you at all times. Review it regularly and ensure that every step takes you closer.</p>
                    </div>
                  </div> -->
                  <!-- <div class="mt-4">
                    <h5 class="mb-4">Leave a Reply</h5>
                    <form>
                      <div class="row">
                        <div class="form-group col-md-6 mb-3">
                          <input type="text" class="form-control" id="name" placeholder="Your Name">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                          <input type="email" class="form-control" id="inputEmail4" placeholder="Your Email">
                        </div>
                        <div class="form-group col-12 mb-3">
                          <input type="text" class="form-control" id="Website" placeholder="Website">
                        </div>
                        <div class="form-group col-md-12 mb-3">
                          <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <div class="form-group col-md-12 mb-3">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="customCheck1">
                            <label class="form-check-label ps-1" for="customCheck1">I consent to having this website store my submitted information so they can respond to my inquiry.</label>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <a class="btn btn-primary" href="#">Send Message</a>
                        </div>
                      </div>
                    </form>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0">
          <div class="blog-sidebar">
            <div class="widget">
              <div class="widget-title">
                <h5>Les récents forums</h5>
              </div>
              <?php foreach($forums as $forum ): ?>
                <div class="d-flex mb-3 align-items-start">
                  <div class="avatar avatar-xl">
                    <img class="img-fluid" src="images/blog/06.jpg" alt="">
                  </div>
                  <div class="ms-3 recent-posts">
                    <a href="/<?= FR ?>/forum/list/<?= $forum->id ?>"><b><?= $forum->titre ?></b></a>
                    <a class="d-block font-sm mt-1 text-light" href="/<?= FR ?>/forum/list/<?= $forum->id ?>"><?= $forum->date_creation ?></a>
                  </div>
                </div>
              <?php endforeach ?>
            </div>
            <!-- <div class="widget">
              <div class="widget-title">
                <h5>Categories</h5>
              </div>
              <ul class="list-unstyled list-style mb-0">
                <li><a href="#">Accountancy<span class="ms-auto">(3)</span></a></li>
                <li><a href="#">General Insurance<span class="ms-auto">(15)</span></a></li>
                <li><a href="#">Motoring & Automotive<span class="ms-auto">(10)</span></a></li>
                <li><a href="#">Social Care<span class="ms-auto">(6)</span></a></li>
                <li><a href="#">Purchasing<span class="ms-auto">(5)</span></a></li>
              </ul>
            </div> -->
            <!-- <div class="widget">
              <div class="newsletter p-4 bg-dark">
                <p class="text-white mb-0">Subscribe for Michael Bean News and receive daily updates</p>
                <div class="search my-3">
                  <i class="fa fa-paper-plane"></i>
                  <input type="email" class="form-control" placeholder="Your email address">
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="dateposted1">
                  <label class="form-check-label" for="dateposted1"><em class="text-white">I agree to storage of my email according to Privacy Policy</em></label>
                </div>
                <div class="newsletter-bg-icon">
                  <i class="far fa-envelope"></i>
                </div>
              </div>
            </div> -->
            <div class="widget">
              <div class="widget-title">
                <h5>Subscribe & Follow</h5>
              </div>
              <div class="social">
                <ul class="list-unstyled">
                  <li class="facebook">
                    <a class="text-uppercase" href="#"> <i class="fab fa-facebook-f me-3"></i>Facebook</a>
                    <a class="follow ms-auto" href="#">Like </a>
                  </li>
                  <li class="twitter">
                    <a class="text-uppercase" href="#"> <i class="fab fa-twitter me-3"></i>twitter</a>
                    <a class="follow ms-auto" href="#">Followers </a>
                  </li>
                  <li class="youtube">
                    <a class="text-uppercase" href="#"> <i class="fab fa-youtube me-3"></i>youtube</a>
                    <a class="follow ms-auto" href="#">Subscribers </a>
                  </li>
                  <li class="instagram">
                    <a class="text-uppercase" href="#"> <i class="fab fa-instagram me-3"></i>instagram</a>
                    <a class="follow ms-auto" href="#">Followers </a>
                  </li>
                  <li class="linkedin">
                    <a class="text-uppercase" href="#"> <i class="fab fa-linkedin-in me-3"></i>linkedin</a>
                    <a class="follow ms-auto" href="#">Followers </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="widget">
              <div class="section-title mb-0">
                <h5>Testimonials</h5>
              </div>
              <div class="owl-carousel owl-nav-top-right" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="5">
                <div class="item">
                  <div class="testimonial-item-02-small text-center">
                    <i class="fas fa-quote-left quotes"></i>
                    <div class="testimonial-content">
                      <p>Jobber is an excellent job portal. We value the resumes received through this channel. Magic Search and Power search are handy tools. We are delighted with their service. </p>
                    </div>
                    <div class="testimonial-author">
                      <div class="testimonial-avatar avatar avatar-lg">
                        <img class="img-fluid rounded-circle" src="images/avatar/02.jpg" alt="">
                      </div>
                      <div class="testimonial-name d-flex justify-content-center">
                        <h6 class="text-primary me-2">John Doe</h6>
                        <span>Customer Service</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item-02-small text-center">
                    <i class="fas fa-quote-left quotes"></i>
                    <div class="testimonial-content">
                      <p>The Jobber database has been one of our current sources for recruitment, backed by a very experienced team who would go out of their way to make sure that requests are taken ahead. </p>
                    </div>
                    <div class="testimonial-author">
                      <div class="testimonial-avatar avatar avatar-lg">
                        <img class="img-fluid rounded-circle" src="images/avatar/04.jpg" alt="">
                      </div>
                      <div class="testimonial-name d-flex justify-content-center">
                        <h6 class="text-primary me-2">Sara Lisbon</h6>
                        <span>Product Designer</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-item-02-small text-center">
                    <i class="fas fa-quote-left quotes"></i>
                    <div class="testimonial-content">
                      <p>Portal is very user-friendly in terms of searching for resumes and job postings. Also, they have an excellent database to search for resumes. As far as services are involved, it's terrific! </p>
                    </div>
                    <div class="testimonial-author">
                      <div class="testimonial-avatar avatar avatar-lg">
                        <img class="img-fluid rounded-circle" src="images/avatar/01.jpg" alt="">
                      </div>
                      <div class="testimonial-name d-flex justify-content-center">
                        <h6 class="text-primary me-2">Anne Smith</h6>
                        <span>Graphic Designer</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="widget">
              <div class="widget-title">
                <h5>Popular Tags</h5>
              </div>
              <div class="popular-tag">
                <ul class="list-unstyled mb-0">
                  <li><a href="#">Bootstrap</a></li>
                  <li><a href="#">HTML5</a></li>
                  <li><a href="#">Wordpress</a></li>
                  <li><a href="#">CSS3</a></li>
                  <li><a href="#">Creative</a></li>
                  <li><a href="#">Multipurpose</a></li>
                  <li><a href="#">Fashion</a></li>
                  <li><a href="#">Color</a></li>
                  <li><a href="#">Lifestyle</a></li>
                </ul>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  blog-detail -->
<!-- Button trigger modal -->

<!--=================================
feature -->
<section class="feature-info-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
          <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
            <i class="flaticon-team"></i>
          </div>
          <div class="feature-info-content text-white ps-sm-4 ps-0">
            <p>Jobseeker</p>
            <h5 class="text-white">Looking For Job?</h5>
          </div>
          <a class="ms-auto align-self-center" href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-dark">
          <div class="feature-info-icon mb-3 mb-sm-0 text-primary">
            <i class="flaticon-job-3"></i>
          </div>
          <div class="feature-info-content text-white ps-sm-4 ps-0">
            <p>Recruiter</p>
            <h5 class="text-white">Are You Recruiting?</h5>
          </div>
          <a class="ms-auto align-self-center" href="#">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
feature -->




