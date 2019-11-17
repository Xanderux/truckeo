<?php
include("header.php");
?>

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="imgs/legumes_resized.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Des aliments de qualité en circuit court</h2>
                <a href="buy.php" class="btn-get-started scrollto"> Commander</a>
              
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="imgs/man_field_resized.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Des producteurs locaux</h2>
     
                <a href="buy.php" class="btn-get-started scrollto"> Commander</a>
              </div>
            </div>
          </div>

        

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">



    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>3 Axes</h3>
          <p>
          </p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="imgs/panier2_resized.jpg" alt="" class="img-fluid">
                
              </div>
              <h2 class="title"><a href="#">Personnalisé</a></h2>
              <p>
                Concevez votre panier <br>
                Choisissez vos produits parmis une multitude de possibilités
                
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="imgs/healthy_resized.jpg" alt="" class="img-fluid">
               
              </div>
              <h2 class="title"><a href="#">Qualité</a></h2>
              <p>
                Notre réseau diversifié est constitué de professionnels sélectionnés rigoureusement.
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="imgs/farmer_resized.jpg" alt="" class="img-fluid">
              
              </div>
              <h2 class="title"><a href="#">Proximité</a></h2>
              <p>
                 Tous nos partenaires se situent à moins de 50 kilomètres de Bourges. <br>
                 Plus de pollution à cause des trajets et des produits frais cueillient le jour même! <br>
                 Récupérez juste votre panier dans le relais le plus proche.


              </p>
            </div>
          </div>

        </div>

      </div>
    </section>


<section  id="clients">
      <div class="container">

        <header class="section-header">
          <h3>Nos producteurs</h3>
          <p>
          </p>
        </header>

    <div id="map"></div>
  </section>



    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Quelques chiffres</h3>
          <!-- <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>-->
        </header>

        <div class="row counters">

  				<div class="col-lg-4 col-4 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Fournisseurs</p>
  				</div>

          <div class="col-lg-4 col-4 text-center">
            <span data-toggle="counter-up">10</span>
            <p>points relais</p>
  				</div>


          <div class="col-lg-4 col-4 text-center">
            <span data-toggle="counter-up">10</span>
            <p>Hard Workers</p>
  				</div>

  			</div>


      </div>
    </section><!-- #facts -->



    <!--==========================
      Clients Section
    ============================-->
    <!--
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Nos fournisseurs</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->



    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Nous contacter</h3>
          <p>Vous souhaitez mettre en place un partenariat? Contactez-nous!</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-12">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:wastenoway19@gmail.com">wastenoway19@gmail.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </section><!-- #contact -->

  </main>
<script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 47.0844351, lng: 2.3905772},
          
          zoom: 13
        });

        var myLatlng = new google.maps.LatLng(47.0844351, 2.3905772);



        var marker = new google.maps.Marker({
        position: myLatlng,
        title:"Hello World!"
        });

// To add the marker to the map, call setMap();
marker.setMap(map);

      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsrdRkpRPeifZwN6LN4phcmr1SwDrSPt8&callback=initMap"
    async defer></script>




<?php
include("footer.php");
?>