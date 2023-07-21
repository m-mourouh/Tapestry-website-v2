  <?php  $page_title = 'BADIK DÉCO ROYAL' ?>
  <?php include 'header.php' ; ?>
  <?php include 'navigation.php' ; ?>
     
        <!-- images slider -->
         <!-- Swiper -->

    <div class="swiper mySwiper">
        <div class="swiper-wrapper swiper-wrapper-banniere">
          <div class="swiper-slide swiper-slide-banniere"><img src="./static/images/banner/banniere1.jpg" alt=""></div>
          <div class="swiper-slide swiper-slide-banniere"><img src="./static/images/banner/banniere2.jpg" alt=""></div>
          <div class="swiper-slide swiper-slide-banniere"><img src="./static/images/banner/banniere3.jpg" alt=""></div>
        </div>
        <!-- <div class="swiper-pagination"></div> -->
      </div>
        <!-- slider end -->

        <!-- slogan -->
        <div class="slogan">
          <h1 class="slogan-title">Badik déco Royal</h1>
          <p class="slogan-desc">votre spécialiste en tapisserie</p>
        </div>
        </header>
        <main id="intro"> 

          <section class="container my-5 section-1" >
            <div class="row d-flex align-items-center" >
              <h1 class="site-title" >qui sommes-nous ?</h1>
              <div class="col-md-8 body-left-col " >
                  <p class="presentation">
                    Badik déco Royal, c'est une jeune équipe passionnée par le métier de la tapisserie d'ameublement et de la décoration.  Il est donc là pour vous accompagner et vous aider dans tous vos projets de décoration intérieure en plus de créer un salon marocain traditionnel ou moderne ainsi que des rideaux et canapés avec les meilleurs produits et tissus, et enfin nous vous garantissons qualité et fiabilité dans le temps et installations les plus rapides en performance.
                  </p>
                  
                </div>
                <div class="col-md-4 body-right-col" data-aos="fade-left" data-aos-duration="1000">
                  <img src="./static/images/armchair.png" alt="badik deco" class="img-fluid" >
                </div>
                <a href="./qui_somme_nous.html" class="readMoreBtn">Lire +</a>
            </div>
            <div class="row gy-2 mt-5">
              <div class="col-md-4">
                <a data-fslightbox="gallery" data-caption="<h1>Example title</h1>" href="./static/images/img-intro-1.jpg">
                  <img src="./static/images/img-intro-1.jpg" alt="" class="img-fluid intro-img" >
                </a>
              </div>
              <div class="col-md-4">
                <a data-fslightbox="gallery" data-caption="<h1>Example title</h1>" href="./static/images/img-intro-2.jpg">
                  <img src="./static/images/img-intro-2.jpg" alt="" class="img-fluid intro-img" >
                </a>
              </div>
              <div class="col-md-4">
                <a data-fslightbox="gallery" data-caption="<h1>Example title</h1>" href="./static/images/img-intro-3.jpg">
                  <img src="./static/images/img-intro-3.jpg" alt="" class="img-fluid intro-img" >
                </a>
              </div>
    
            </div>

          </section>
        </main>
        <!-- Atous -->

        <div class="atouts-container container">
          <div class="atouts-title-bloc">
            <h1 class="titre-atouts">Nos atouts</h1>
            <span class="titre-secondaire"> Nous nous engageons à vous fournir une prestation de qualité</span>
          </div>
          <div class="atous mt-4">
        <div class="bloc" data-aos="fade-left"><span class="atousImg"><img src="./static/images/atouts/1.png" alt=""></span><div class="legend">Professionnalisme</div></div>
        <div class="bloc" data-aos="flip-up"><span class="atousImg"><img src="./static/images/atouts/2.png" alt=""></span><div class="legend">Facilité de paiement</div></div>
        <div class="bloc" data-aos="fade-up"><span class="atousImg"><img src="./static/images/atouts/3.png" alt=""></span><div class="legend">Conseil client</div></div>
        <div class="bloc" data-aos="fade-up"><span class="atousImg"><img src="./static/images/atouts/4.png" alt=""></span><div class="legend">service de qualité </div></div>
        <div class="bloc" data-aos="fade-up"><span class="atousImg"><img src="./static/images/atouts/5.png" alt=""></span><div class="legend">Expertise</div></div>
        <div class="bloc" data-aos="fade-up"><span class="atousImg"><img src="./static/images/atouts/6.png" alt=""></span><div class="legend">Disponibilté</div></div>

      </div>
        </div>


        <div class="services container  my-5">
          <h1 class="site-title  my-5" >Nos produits</h1>
          <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- <div class="col">
              <div class="card h-100">
                <img src="./static/images/services/service1.jpg" class="card-img-top" alt="">
                <div class="card-body">
                  <h5 class="card-title">Aide au choix des couleurs</h5>
                 
                </div>
              </div>
            </div> -->

            <div class="swiper myProducts swiper-product">
              <div class="swiper-wrapper">
                  <div class="swiper-slide ">
                      <div class="col">
                          <div class="card h-100">
                            <img src="./static/images/services/s1.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Les salons marocains</h5>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="swiper-slide ">
                      <div class="col">
                          <div class="card h-100">
                            <img src="./static/images/services/service3.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Les salons modernes</h5>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="swiper-slide ">
                      <div class="col">
                          <div class="card h-100">
                            <img src="./static/images/services/service4.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Les canapés</h5>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="swiper-slide ">
                      <div class="col">
                          <div class="card h-100">
                            <img src="./static/images/services/service5.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Les chambres à coucher</h5>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="swiper-slide ">
                      <div class="col">
                          <div class="card h-100">
                            <img src="./static/images/services/service6.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Les salles à manger</h5>
                            </div>
                          </div>
                        </div>
                  </div>
                  <div class="swiper-slide ">
                      <div class="col">
                          <div class="card h-100">
                            <img src="./static/images/services/service7.jpg" class="card-img-top" alt="">
                            <div class="card-body">
                              <h5 class="card-title">Les rideaux</h5>
                            </div>
                          </div>
                        </div>
                  </div>
                  
                 
       
              </div>
              <!-- <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div> -->
              <!-- <div class="swiper-pagination"></div> -->
            </div>
            
          
          
           
          

          </div>
        </div>
        <!-- Galerie photo -->
        <div class="galerie container  my-5">
          <h1 class="site-title  my-5" >Nos réalisations</h1>
          <div class="row gy-2 mt-5">
            <div class="col-md-3">
              <a data-fslightbox="gallery2" data-caption="<h1>Example title</h1>" href="./static/images/galerie/g1.jpg">
                <img src="./static/images/galerie/g1.jpg" alt="" class="img-fluid intro-img  h-100" >
              </a>
            </div>
            <div class="col-md-3">
              <a data-fslightbox="gallery2" data-caption="<h1>Example title</h1>" href="./static/images/galerie/g2.jpg">
                <img src="./static/images/galerie/g2.jpg" alt="" class="img-fluid h-100" >
              </a>
            </div>
            <div class="col-md-3">
              <a data-fslightbox="gallery2" data-caption="<h1>Example title</h1>" href="./static/images/galerie/g3.jpg">
                <img src="./static/images/galerie/g3.jpg" alt="" class="img-fluid h-100" >
              </a>
            </div>
            <div class="col-md-3">
              <a data-fslightbox="gallery2" data-caption="<h1>Example title</h1>" href="./static/images/galerie/g4.jpg">
                <img src="./static/images/galerie/g4.jpg" alt="" class="img-fluid h-100 " >
              </a>
            </div>
  
          </div>
          </div>

          <div class="container d-flex justify-content-center">
  <?php $col_num = 8 ; ?>
  <?php include 'form.php'; ?>

</div>
<?php include 'bande.php'; ?>

<?php include 'footer.php'; ?>