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
                  <img src="imgs/products/apple_resized.webp" alt="" class="img-fluid">

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
                  <img src="imgs/products/cheese_resized.webp" alt="" class="img-fluid">

                </div>
                <h2 class="title"><a href="#">Gruyère</a></h2>
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
                  <img src="imgs/products/miel_resized.webp" alt="" class="img-fluid">

                </div>
                <h2 class="title"><a href="#">Miel</a></h2>
                <p> 500 ml<p>

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
                  <img src="imgs/products/poireau_resized.webp" alt="" class="img-fluid">

                </div>
                <h2 class="title"><a href="#">Poireaux</a></h2>
                <p>

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
                  <img src="imgs/products/tomato_resized.webp" alt="" class="img-fluid">

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
                  <img src="imgs/products/eggs_resized.webp" alt="" class="img-fluid">

                </div>
                <h2 class="title"><a href="#">Oeufs</a></h2>
                <p> Boite de 6 oeufs

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