<?php  $page_title = 'Nous Réalisations' ?>
  <?php include 'header.php' ; ?>
  <?php include 'navigation.php' ; ?>
     
        <div class="banniere-page page-3">
            <h1 class="title-page">Nous réalisations</h1>
        </div>
    </header>
    <!-- products -->
    <div class="services container  my-5">
        <h1 class="site-title  my-5" >Nous réalisations</h1>
        <div class="row gy-2 gx-2 mt-5">
           <?php for($i = 1 ; $i <= 44 ; $i++): ?>
            <div class="col-md-4">
              <a data-fslightbox="gallery3" data-caption="<h1>Example title</h1>" href="./static/images/galerie/g<?php echo $i; ?>.jpg">
                <img src="./static/images/galerie/<?php echo 'g'.$i.'.jpg' ?>"  style=" height: 250px; object-fit: cover;"  alt="" class="img-fluid w-100   rounded" >
              </a>
            </div>  
            <?php endfor; ?>
          </div>
    </div>

    <div class="container d-flex justify-content-center">
  <?php $col_num = 8 ; ?>
  <?php include 'form.php'; ?>
</div>
<?php include 'footer.php' ; ?>