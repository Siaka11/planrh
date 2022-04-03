

<!--=================================
Signin -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-8 col-lg-10 col-md-12">
        <div class="login-register">
          <div class="section-title">
           <h4 class="text-center">Connectez-vous à votre compte</h4>
          </div>
          <fieldset>
            <legend class="px-2">Choisissez votre type de compte</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item me-4">
                <a class="nav-link active"  data-bs-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Candidate</h6>
                      <p class="mb-0">Connectez-vous en tant que candidat</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  data-bs-toggle="tab" href="#employer" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Employeur</h6>
                      <p class="mb-0">Connectez-vous en tant qu'Employeur</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form method="POST" class="mt-4">
                <div class="row">
                  <div class="mb-3 col-12">
                    <label class="form-label" for="Email2">Nom d'utilisateur *</label>
                    <input type="text" name="email" class="form-control" id="Email22">
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="password2">Mot de Passe *</label>
                    <input type="password" name="motdepasse" class="form-control" id="password32">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  <button class="btn btn-primary d-grid" name="send" >Connexion</button>
                  </div>
                  <div class="col-md-6">
                    <div class="mt-3 mt-md-0 forgot-pass">
                      <a href="#">Mot de passe oublié?</a>
                      <p class="mt-1">Vous n'avez pas de compte ?<a href="register.html">Inscrivez-vous ici</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form method="POST" class="mt-4">
                <div class="row">
                  <div class="mb-3 col-12">
                    <label class="form-label" for="Email2">Nom d'utilisateur *</label>
                    <input type="text" name="email" class="form-control" id="Email2">
                  </div>
                  <div class="mb-3 col-12">
                    <label class="form-label" for="password2">Mot de Passe *</label>
                    <input type="password" name="motdepasse" class="form-control" id="password2">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                  <button class="btn btn-primary d-grid" name="sendemployeur">Connexion</button>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0">
                      <a href="#">Mot de passe oublié?</a>
                      <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="Remember-02">
                        <p class="mt-1">Vous n'avez pas de compte ?<a href="register.html">Inscrivez-vous ici</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!--
          <div class="mt-4">
            <fieldset>
              <legend class="px-2">Login or Sign up with</legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f me-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter me-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google me-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in me-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
          -->
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Signin -->

<br><br>
