<!DOCTYPE html>
<html lang="swahili">

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
<!-- Blog Utilisateur -->
<section class="section">
  <div class="container">
    <div class="row masonry-container">
      <div class="col-lg-8 col-sm-12 mb-5">
        <article class="text-center">
        <h2 class="mb-4">SE CONNECTER</h2>
        <h6 class="text-dark" align="justify"> Pour de raison de sécurité, veuillez vous <a href="index.php">déconnecter</a> et fermer votre navigateur lorsque vous avez fini d'accéder aux services authentifiés.</h6>
        
        <form action="" class="row" method="POST">
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="nomUtilisateurL" placeholder="Nom Utilisateur">
            <input type="password" class="form-control mb-4" name="motdepasseL" placeholder="Mot de Passe">
            <button class="btn btn-primary" type="submit" name="btnAddLecteur">Connexion</button>
            <br> <br>
          </div>
          <h6 class="text-dark" align="justify">Vous n'avez pas de <a href="user.html.php">Compte?</a> ou <a href="LogUpdate.html.php">Modifier</a> votre compte</h6>
          <?php
          if(isset($_POST['btnAddLecteur'])){
              require_once '../controller/AddData.php';
          }
          echo isset($message)? $message:'';
            ?>
        </form>

        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-2.jpg" alt="post-thumb">
          
      </div>
</section>
<!-- /blog post -->

<!-- instagram -->
<section>
  <div class="container-fluid px-0">
    <div class="row no-gutters instagram-slider" id="instafeed" data-userId="4044026246"
      data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div>
  </div>
</section>
<!-- FOOTER -->



<!-- jQuery -->
<script src="../../assets/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="../../assets/plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="../../assets/plugins/slick/slick.min.js"></script>
<!-- masonry -->
<script src="../../assets/plugins/masonry/masonry.js"></script>
<!-- instafeed -->
<script src="../../assets/plugins/instafeed/instafeed.min.js"></script>
<!-- smooth scroll -->
<script src="../../assets/plugins/smooth-scroll/smooth-scroll.js"></script>
<!-- headroom -->
<script src="../../assets/plugins/headroom/headroom.js"></script>
<!-- reading time -->
<script src="../../assets/plugins/reading-time/readingTime.min.js"></script>

<!-- Main Script -->
<script src="../../assets/js/script.js"></script>

</body>
</html>