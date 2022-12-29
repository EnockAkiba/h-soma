<?php
session_start();
  $IdLec= $_SESSION['IdLecteur'];
  require_once '../controller/updateData.php';
  require_once '../model/Lecteur.class.php';
  $categorieLecteur= new Lecteur();
  $tab= $categorieLecteur->SuperMethod("idCateLec,designationCateLec" ,"CategorieLecteur", "1");
 date("d.m.Y") 
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
        <h2 class="mb-4">Modification Compte Utilisateur</h2>
        <form action="" class="row" method="POST">
          <div class="col-lg-6">
          <select class="form-control mb-4" name="idCateLec" id="">
                <option value="<?= $idCateLec ?>"></option>
                 <?php 
                  foreach($tab as $data):
                ?>
                 <option value="<?= $data['idCateLec'] ?>"><?= $data['designationCateLec'] ?></option>
                 <?php
                 endforeach;
                   ?>
            </select>
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="NomsLecteur" id="name" value="<?= $NomsLecteur ?>">
          </div>
          <div class="col-lg-6">
            <input type="email" class="form-control mb-4" name="emailLec" id="name" value="<?= $emailLec ?>">
          </div>
          <div class="col-lg-6">
            <input type="date" class="form-control mb-4" name="dateNaissanceL" id="name" value="<?= $dateNaissanceL ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4"  name="lieuNaissanceL" id="name" value="<?= $lieuNaissanceL ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="AdressesL" value="<?= $AdressesL ?>">
          </div>
          <div class="col-lg-6">
            <select type="text" class="form-control mb-4" name="niveauEtudeL"  placeholder="Niveau d'Etude">
            <option value="<?= $niveauEtudeL ?>"><?= $niveauEtudeL ?></option>
            <option value="Ecolier">Ecolier</option>
            <option value="Eleve">Eleve</option>
            <option value="Etudiant">Etudiant</option>
            <option value="Professeur">Professeur</option>
          </select>
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="universiteL" value="<?= $universiteL ?>">
          </div>
          <div class="col-lg-6">
            <input type="text" class="form-control mb-4" name="nomUtilisateurL" value="<?= $nomUtilisateurL ?>">
          </div>
          <div class="col-lg-6">
            <input type="password" class="form-control mb-4" name="motdepasseL" placeholder="Mot de Passe">
          </div>
         
          <div class="col-12">
            <button class="btn btn-primary" type="submit" name="btnModifierLecteur">Modifier</button> 
            <br>
            <br>
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