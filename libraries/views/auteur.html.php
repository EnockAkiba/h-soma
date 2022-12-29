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
    <div class="col-lg-8 col-sm-6 mb-5">
        <article class="text-center">
        <h2 class="mb-12">Creation Compte Auteur</h2>
        <form action="" class="row" method="POST" enctype="multipart/form-data">
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="nomAut" id="name" placeholder="Nom Auteur">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="prenomAut" id="name" placeholder="Post nom">
          </div>
          <div class="col-lg-6">
            <select type="text" class="form-control mb-4" name="sexeAut" id="name" placeholder="Genre">
                <option value="">Choisissez le genre</option>
                <option value="masculin">Masculin</option>
                <option value="feminin">Féminin</option>
            </select>
          </div>
          <div class="col-lg-6">
            <input type="date" class="form-control mb-4"  name="dateNaissAut" id="name" placeholder="Date Naissance">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="villeAut" placeholder="Ville Q AV">
          </div>
          <div class="col-lg-6">
            <input type="email" class="form-control mb-4" name="emailAut" placeholder="Adresse mail">
          </div>
          <div class="col-lg-6">
            <input type="file" class="form-control mb-4" name="photoAut">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="userNameAut" placeholder="Nom Utilisateur">
          </div>
          <div class="col-lg-6">
            <input type="password" class="form-control mb-4" name="passwordAut" placeholder="Mot de Passe">
          </div>
         
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="btnAddAuteur">Enregister</button>
            <br>
            <br>
             <?=  isset($success)?$success:'' ?>
            <?= isset($warning)?$warning:'' ?>
            <?= isset($danger)?$danger:'' ?>
          </div>
        </form>

        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-2.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">USER</p>
          <h4 class="title-border"><a class="text-dark" href="login.html.php">Vous avez déjà un compte?</a></h4>
        </article>
      </div>
      
</section>

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