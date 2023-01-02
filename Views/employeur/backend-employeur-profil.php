

<!--=================================
My Profile -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4">
            <h4>Informations</h4>
          </div>
          <div class="cover-photo-contact">
            <div class="cover-photo">
              <img class="img-fluid " src="../../images/<?=$employeur->couverture ?>" style="width: 1800px; height:200px" alt="">
            </div>
            <button class="btn m-3 btn-primary" data-bs-toggle="modal" data-bs-toggle="modal" data-bs-target="#staticBackdrop1" >Modifier la couverture</button>
            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Prendre une image de couverture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                  <form method='post' action='' enctype="multipart/form-data">
                    Selectionnez une image : 
                    <input type='file' name='avatar'id='file' class='form-control' ><br>
                    <input type='submit' class='btn btn-info' value='Charger' name="couverture" id='btn_upload'>
                  </form>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <form method="POST">
            <div class="row">
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Nom Entreprise</label>
                <input type="text" class="form-control" name="entreprise" value="<?=$employeur->entreprise ?>" >
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="<?=$employeur->email ?>" >
              </div>
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Nom </label>
                <input type="text" class="form-control" name="nom" value="<?=$employeur->nom ?>" >
              </div>
              <!-- <div class="form-group col-md-6 mb-3 datetimepickers">
                <label class="form-label">Date de création</label>
                <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                  <input type="text" name="datecreation" class="form-control datetimepicker-input" value="<?=$employeur->datecreation ?>"  data-target="#datetimepicker-01">
                  <div class="input-group-append d-flex" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                  </div>
                </div>
              </div> -->
              <div class="form-group col-md-6 mb-3">
                <label class="form-label">Téléphone</label>
                <input type="text" name="telephone" class="form-control" value="<?=$employeur->telephone ?>" >
              </div>
              <div class="form-group col-md-6 mb-3 select-border">
                <label class="form-label">Secteur d'activité</label>
                <select name="secteur" class="form-control basic-select">
                  <option value="value 01" selected="selected">immigration</option>
                  <option value="value 02">Informatique</option>
                  <option value="value 03">Négoce</option>
                </select>
              </div>
              <div class="form-group col-md-6 mb-3 mb-md-0">
                <label class="form-label">Site Web</label>
                <input type="text" name="web" class="form-control" value="<?=$employeur->web ?>" >
              </div>
              <div class="form-group col-md-12 mb-0">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="5" placeholder="<?=$employeur->email ?>" ></textarea>
              </div>
            </div>
         
         
            </div>
            <div class="user-dashboard-info-box">
              <div class="section-title-02 mb-3">
                <h4>Réseaux Sociaux</h4>
              </div>
            
                <div class="row">
                  <div class="form-group col-md-6 mb-3">
                    <label class="form-label">Facebook</label>
                    <input type="text" name="facebook" class="form-control" value="<?=$employeur->facebook ?>" >
                  </div>
                  <div class="form-group col-md-6 mb-3">
                    <label class="form-label">Twitter</label>
                    <input type="email" name="twitter" class="form-control" value="<?=$employeur->twitter ?>" >
                  </div>
                  <div class="form-group col-md-6 mb-0">
                    <label class="form-label">Linkedin</label>
                    <input type="text" name="linkedin" class="form-control" value="<?=$employeur->linkedin ?>" >
                  </div>
                  <div class="form-group col-md-6 mb-0">
                    <label class="form-label">Youtube</label>
                    <input type="text" name="youtube" class="form-control" value="<?=$employeur->youtube ?>" >
                  </div>
                </div>
              
            </div>
            <div class="user-dashboard-info-box">
              <div class="section-title-02 mb-3">
                <h4>Siège Social</h4>
              </div>
              
                <div class="row">
                  <div class="form-group col-md-12 mb-3">
                    <label class="form-label">Entrez la location</label>
                    <input type="text" name="siege" class="form-control" value="<?=$employeur->siege ?>"  placeholder="Enter Your  location">
                  </div>
                </div>
                <div class="location-map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15888.330386693791!2d-3.9894956!3d5.4043882!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf06c43c49b7720e7!2sOrientation%20Canada%20Multi-visas!5e0!3m2!1sfr!2sci!4v1642177997737!5m2!1sfr!2sci" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              
            </div>
            <button class="btn btn-md btn-primary" name="updateemployeur">Enregistrez</button>
          </form>
      </div>
    </div>
  </div>
</section>
<!--=================================
My Profile -->
