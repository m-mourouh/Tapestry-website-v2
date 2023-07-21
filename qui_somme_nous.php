<?php  $page_title = 'Qui Somme Nous' ?>
  <?php include 'header.php' ; ?>
  <?php include 'navigation.php' ; ?>
     
        <div class="banniere-page page-1">
            <h1 class="title-page">qui somme nous</h1>
        </div>
    </header>
    <main id="intro"> 

        <section class="container my-5 section-1" >
          <div class="row d-flex align-items-center" >
            <h1 class="mb-3" >BADIK DÉCO ROYAL</h1>
            <div class="body-left-col " >
                <p class="presentation">
                  Badik déco Royal, c'est une jeune équipe passionnée par le métier de la tapisserie d'ameublement et de la décoration.  Il est donc là pour vous accompagner et vous aider dans tous vos projets de décoration intérieure en plus de créer un salon marocain traditionnel ou moderne ainsi que des rideaux et canapés avec les meilleurs produits et tissus, et enfin nous vous garantissons qualité et fiabilité dans le temps et installations les plus rapides en performance.
                </p>
                
              </div>

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

      <div class="container d-flex justify-content-center">
  <?php $col_num = 8 ; ?>
  <?php include 'form.php'; ?>
</div>
<?php include 'footer.php' ; ?>