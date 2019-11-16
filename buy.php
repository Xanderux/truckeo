<?php
include("header.php");
?>


<main id="main">




    <!--==========================
      About Us Section
      ============================-->
      <section id="about">
        <div class="container">

          <header class="section-header">
            <h3>Produits</h3>
            <p>
            </p>
          </header>

          <div class="row about-cols">

            <div class="col-md-4 wow fadeInUp">
              <div class="about-col">
                <div class="img">
                  <img src="img/products/apple.jpg" alt="" class="img-fluid">

                </div>
                <h2 class="title"><a href="#">Pomme</a></h2>
                <p>
                  Royal Gala <br>
                  1 kg

                </p>
                 <div class="form-group row">
              <label for="example-Qté-input" class="offset-2 col-2 col-form-label">Qté</label>
              <div class="col-8">
                <input class="form-control" type="Qté" value="0" id="example-Qté-input">
              </div>
            </div>
              </div>
            </div>

            <div class="col-md-4 wow fadeInUp essai" data-wow-delay="0.1s">
              <div class="about-col">
                <div class="img">
                  <img src="img/products/cheese.jpg" alt="" class="img-fluid">

                </div>
                <h2 class="title"><a href="#">Gruillère</a></h2>
                <p>
                  Lait de vache
                </p>
                <div class="form-group row">
                  <label for="example-Qté-input" class="offset-2 col-2 col-form-label">Qté</label>
                  <div class="col-8">
                    <input class="form-control" type="Qté" value="0" id="example-Qté-input">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="about-col">
                <div class="img">
                  <img src="img/products/miel.jpg" alt="" class="img-fluid">

                </div>
                <h2 class="title"><a href="#">Miel</a></h2>
                <p>
                 Tous nos partenaires se situent à moins de 50 kilomètres de Bourges.
                 Plus de pollution à cause des trajets et des produits frais cueillient le jour même!

               </p>
               <div class="form-group row">
                <label for="example-Qté-input" class="offset-2 col-2 col-form-label">Qté</label>
                <div class="col-8">
                  <input class="form-control qte" type="Qté" value="0" id="example-Qté-input">
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/products/poireau.jpg" alt="" class="img-fluid">

              </div>
              <h2 class="title"><a href="#">Poireaux</a></h2>
              <p>
                Étudiant? Demandeur d'emploi? <br>
                à l'unité

              </p>
              <div class="form-group row">
                <label for="example-Qté-input" class="offset-2 col-2 col-form-label">Qté</label>
                <div class="col-8">
                  <input class="form-control" type="Qté" value="0" id="example-Qté-input">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/products/tomato.jpg" alt="" class="img-fluid">

              </div>
              <h2 class="title"><a href="#">Tomates</a></h2>
              <p>
                1 kg
              </p>
              <div class="form-group row">
                <label for="example-Qté-input" class="offset-2 col-2 col-form-label">Qté</label>
                <div class="col-8">
                  <input class="form-control" type="Qté" value="0" id="example-Qté-input">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/eggs.jpg" alt="" class="img-fluid">

              </div>
              <h2 class="title"><a href="#">Proximité</a></h2>
              <p>
               Tous nos partenaires se situent à moins de 50 kilomètres de Bourges.
               Plus de pollution à cause des trajets et des produits frais cueillient le jour même!

             </p>
             <div class="form-group row">
              <label for="example-Qté-input" class="offset-2 col-2 col-form-label">Qté</label>
              <div class="col-8">
                <input class="form-control" type="Qté" value="0" id="example-Qté-input">
              </div>
            </div>
          </div>
        </div>

      </div>
      <button onclick="location.href='confirm.php'" type="button" class="btn btn-success col-md-4 offset-md-8">Valider</button>

    </div>

  </section>



</main>




<?php
include("footer.php");
?>