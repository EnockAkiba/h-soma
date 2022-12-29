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
  <!-- /preloader -->

<header class="navigation">
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html"><img class="img-fluid" src="images/Blo.png" alt="Soma."></a>
    <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navogation"
      aria-controls="navogation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse text-center" id="navogation">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link text-uppercase text-dark dropdown-toggle" href="#" id="navbarDropdown"
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Home
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="login.html.php">Lecteur</a>
            <a class="dropdown-item" href="login.html.php">Auteur</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link text-uppercase text-dark dropdown-toggle" href="#" id="navbarDropdown"
            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            OUVRAGES
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="ouvrage.php">Consulter</a>
            <a class="dropdown-item" href="ouvrage.php">Publier un ouvrage</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-dark" href="category.html">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-uppercase text-dark" href="contact.html">Contact</a>
        </li>
      </ul>
      <form class="form-inline position-relative ml-lg-4">
        <input class="form-control px-0 w-100" type="search" placeholder="Search">
        <!-- <button class="search-icon" type="submit"><i class="ti-search text-dark"></i></button> -->
        <a href="search.html" class="search-icon"><i class="ti-search text-dark"></i></a>
      </form>
    </div>
    
  </nav>
</header>

<!-- featured post -->
<section>
  <div class="container-fluid p-sm-0">
    <div class="row featured-post-slider">
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="images/featured-post/post-1.jpg" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">LifeStyle</p>
              <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">Organize Your Life With 10 Simple rule</a></h4>
              <a class="btn btn-outline-light" href="blog-single.html">read more</a>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="images/featured-post/post-2.jpg" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">Philosophy</p>
              <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">Organize Your Life With 10
                  Simple rule</a></h4>
              <a class="btn btn-outline-light" href="blog-single.html">read more</a>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="images/featured-post/post-3.jpg" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">Fashion</p>
              <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">Organize Your Life With 10
                  Simple rule</a></h4>
              <a class="btn btn-outline-light" href="blog-single.html">read more</a>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="images/featured-post/post-4.jpg" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">Article</p>
              <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">Organize Your Life With 10
                  Simple rule</a></h4>
              <a class="btn btn-outline-light" href="blog-single.html">read more</a>
            </div>
          </div>
        </article>
      </div>
      <div class="col-lg-3 col-sm-6 mb-2 mb-lg-0 px-1">
        <article class="card bg-dark text-center text-white border-0 rounded-0">
          <img class="card-img rounded-0 img-fluid w-100" src="images/featured-post/post-5.jpg" alt="post-thumb">
          <div class="card-img-overlay">
            <div class="card-content">
              <p class="text-uppercase">Nature</p>
              <h4 class="card-title mb-4"><a class="text-white" href="blog-single.html">Organize Your Life With 10
                  Simple rule</a></h4>
              <a class="btn btn-outline-light" href="blog-single.html">read more</a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-12">
        <h2 class="mb-4">PUBLIER UN OUVRAGE</h2>
        
        <form action="" class="row" method="POST" enctype="multipart/form-data">
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="titreOuvr" placeholder="Titre Ouvrage ">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="idCatOuvr" placeholder="categorie">
          </div>
         
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="domaineOuvr" placeholder="Domaine">
                <div class="input-group">
                    <span class="input-group-text">Image</span>
                    <input type="file" name="photoOuvr" class="form-control">
            </div>  
        </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="langueOuvr" placeholder="Langue">
                <div class="input-group">
                    <span class="input-group-text">Ouvrage</span>
                    <input type="file" name="fichierOuvr" class="form-control">
            </div>    
        </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="idAut" placeholder="auteur">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="editionOuvr" placeholder="Maison d'Edition">
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="btnOuvrage">Publier</button>
            <br>
            <br>
            <?=  isset($success)?$success:'' ?>
            <?= isset($warning)?$warning:'' ?>
            <?= isset($danger)?$danger:'' ?>
            <h6><a class="text-dark" href="user.php">Une fois le livre est publié, il sera visible  tous nos utilisateurs connectés à ce site. Ce livre pourra etre lu, liké et commenté selon le nobre des vues.</a></h6>
          </div>

        </form>
        </div>
    </div>
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
