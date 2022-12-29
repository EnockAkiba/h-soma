<?php
          if(isset($_POST['btnUpdateLec'])){
            require_once '../controller/updateData.php';
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Soma</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
  <!-- /preloader -->

<header class="navigation">
</header>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-12">
        <h2 class="mb-4">SERVICE CENTRAL D'AUTHENTIFICATION</h2>
        <h6 class="text-dark" align="justify"> Pour de raison de seurité, veuillez entrer votrer nom d'utilisateur et le mot de passe pour la modification de votre compte.</h6>
        <form action="" class="row" method="POST">
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="userNameAut" placeholder="Nom Utilisateur">
          </div>
          <div class="col-lg-6">
            <input type="password" class="form-control mb-4" name="passwordAut" placeholder="Mot de Passe">
          </div>
         
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="btnUpdateLec">Envoyer</button>
            <br>
            <br>
            <h6><a class="text-dark" href="auteur.html.php">Vous n'avez pas de compte? Créer un compte utulisateur</a></h6>
          </div>
          <?php
          if(isset($_POST['btnUpdateLec'])){
              require_once '../controller/updateData.php';
          }
          echo isset($message)? $message:'';
            ?>
        </form>
        </div>
    </div>
  </div>
</section>


<!-- instagram -->
<section>
  <div class="container-fluid px-0">
    <div class="row no-gutters instagram-slider" id="instafeed" data-userId="4044026246"
      data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div>
  </div>
</section>
<!-- /instagram -->

<footer class="bg-secondary">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <a href="index.html"><img src="#" alt="Soma" class="img-fluid"></a>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <h6>Adresse</h6>
          <ul class="list-unstyled">
            <li class="font-secondary text-dark">Goma</li>
            <li class="font-secondary text-dark">Av du lac</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <h6>Contactez nous</h6>
          <ul class="list-unstyled">
            <li class="font-secondary text-dark">Tel: +243 999 249 863</li>
            <li class="font-secondary text-dark">Mail:achilleblondy@outlook.fr</li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 mb-4 mb-md-0">
          <h6>Follow</h6>
          <ul class="list-inline d-inline-block">
            <li class="list-inline-item"><a href="#" class="text-dark"><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-dark"><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-dark"><i class="ti-linkedin"></i></a></li>
           <!-- /instagram  <li class="list-inline-item"><a href="#" class="text-dark"><i class="ti-github"></i></a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center pb-3">
    <p class="mb-0">Copyright ©<script>var CurrentYear = new Date().getFullYear()
    document.write(CurrentYear)</script> by  <a href="https://hibaigle.com/">Hibaigle</a></p>
  </div>
</footer>

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