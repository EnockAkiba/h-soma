<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Soma |</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- theme meta -->
  <meta name="theme-name" content="parsa" />

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../assets/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="../../assets/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="../../assets/plugins/themify-icons/themify-icons.css">

  <!-- Main Stylesheet -->
  <link href="../../assets/css/style.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>
  <!-- preloader -->
  <div class="preloader">
    <div class="loader">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!--HOME -->

<header class="navigation">
</header>

<section class="section">
  <div class="container rounded ">
    <div class="row">
      <div class=" col-lg-6">
        <img src="imageSave/<?=$data['photoOuvr']?>" alt="author" class="offset-2 img-fluid" style="height:70vh">
      </div>
      <div class="col-lg-6">
      <h2 class="mb-4"><?=$data['titreOuvr']?></h2>
        <div class="media-body">
          <ul class="list-inline fs-5">
              <li >Domaine:         <span class="fw-bold"><?=$data['domaineOuvr']?> </span> </li> 
              <li >Maison d'Edition:<span class="fw-bold"><?=$data['editionOuvr']?> </span> </li>
              <li >Langue:          <span class="fw-bold"><?=$data['langueOuvr']?>  </span> </li>
              <li >Fichier:         <span class="fw-bold"><a href="" class="text-dark">ouvir</a> </span></li>
              <li >Nom de l'auteur: <span class="fw-bold"><?=$data['nomAut']?> </span> </li>
          </ul>
        </div>
  </div>
<!-- </section>
<section class="section"> -->
    <section class="container">
    <div class="widget">
        
        <form action="#" class="row" method="POST">
          <div class="col-12">
            <textarea name="message" id="message" class="form-control mb-4" placeholder="Ecire quelque chose en commentaire ..."></textarea>
          </div>
          <div class="col-12">
          <p class="mb-5">Une fois cliquer sur commenter, votre commentaire sera directement visible sur notre plate forme.</p><br>
            <button class="btn btn-primary">Commenter</button>
          </div>
        </form> <br> <br>
          <h6 class="mb-4">AUTRES COMMENTAIRES SUR LE LIVRE</h6>
          <div class="media mb-4">
            <div class="post-thumb-sm mr-3">
              <img class="img-fluid" src="../../assets/images/im2.jpg" alt="post-thumb">
            </div>
            <div class="media-body">
              <ul class="list-inline d-flex justify-content-between mb-2">
                <li class="list-inline-item">Nom du commetnateur</li>
                <li class="list-inline-item">Heure et date que l'ouvrage a été commenté</li>
              </ul>
              <h6 class="text-dark">Lorem ipsum dolor sit amet, consectetur</h6>
            </div>
          </div>
          <div class="media mb-4">
            <div class="post-thumb-sm mr-3">
              <img class="img-fluid" src="../../assets/images/im3.jpg" alt="post-thumb">
            </div>
            <div class="media-body">
              <ul class="list-inline d-flex justify-content-between mb-2">
                <li class="list-inline-item">Nom du commetnateur</li>
                <li class="list-inline-item">Heure et date que l'ouvrage a été commenté</li>
              </ul>
              <h6 class="text-dark">Lorem ipsum dolor sit amet, consectetur</h6>
            </div>
          </div>
          <div class="media mb-4">
            <div class="post-thumb-sm mr-3">
              <img class="img-fluid" src="../../assets/images/im2.jpg" alt="post-thumb">
            </div>
            <div class="media-body">
              <ul class="list-inline d-flex justify-content-between mb-2">
                <li class="list-inline-item">Nom du commentateur</li>
                <li class="list-inline-item">Heure et date que l'ouvrage a été commenté</li>
              </ul>
              <h6 class="text-dark">Lorem ipsum dolor sit amet, consectetur</h6>
            </div>
          </div>
        </div>
    </div>
    </section>
</section>
<!-- /instagram -->

<?php require_once 'include/footer.html.php' ?>