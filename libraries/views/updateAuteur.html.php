
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
        <h2 class="mb-4">Modification Compte Auteur</h2>
        <form action="" class="row" method="POST">
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="nomAut" id="name" value="<?= $nomAut ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="prenomAut" id="name" value="<?= $prenomAut ?>">
          </div>
          <div class="col-lg-6">
            <select type="text" class="form-control mb-4" name="sexeAut" id="name" placeholder="Genre">
                <option value="<?= $sexeAut ?>">Choisissez le genre</option>
                <option value="masculin">Masculin</option>
                <option value="feminin">Féminin</option>
            </select>
          </div>
          <div class="col-lg-6">
            <input type="date" class="form-control mb-4"  name="dateNaissAut" id="name" value="<?= $dateNaissAut ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="villeAut" value="<?= $villeAut ?>">
          </div>
          <div class="col-lg-6">
            <input type="email" class="form-control mb-4" name="emailAut" value="<?= $emailAut ?>">
          </div>
          <!-- <div class="col-lg-6">
            <input type="file" class="form-control mb-4" name="photoAut" value="<?= $photoAut ?>">
          </div> -->
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="userNameAut" value="<?= $userNameAut ?>">
          </div>
          <div class="col-lg-6">
            <input type="password" class="form-control mb-4" name="passwordAut" value="<?= $passwordAut ?>">
          </div>
         
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="btnModAuteur">Modifier</button>
            <br>
            <br>
            <?=  isset($success)?$success:'' ?>
            <?= isset($warning)?$warning:'' ?>
            <?= isset($danger)?$danger:'' ?>
          </div>
      
        </form>
        </div>
        
    </div>
    
  </div>
  </section>


<!-- instagram -->

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