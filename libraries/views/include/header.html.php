<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Soma |</title>

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

    <!-- Font awesome -->
    <link rel="stylesheet" href="../../assets/fontawesome/css/all.min.css">
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
    <a class="navbar-brand" href="index.html"><img class="img-fluid" src="../../assets/images/Blo.png" alt="#"></a>
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
            <a class="dropdown-item" href="login.php">Lecteur</a>
            <a class="dropdown-item" href="login.php">Auteur</a>
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