<?php
require_once '../model/Lecteur.class.php';
require_once '../model/Exception.class.php';


// initialisation de la class addLecteur
$lecteur=new Lecteur();
  if(isset($_POST['btnUpdateLec'])){
     if(!empty($_POST['nomUtilisateurL']) and !empty($_POST['motdepasseL'])){
              $nomUtilisateurL=htmlspecialchars($_POST['nomUtilisateurL']);
              $motdepasseL=htmlspecialchars(sha1($_POST['motdepasseL']));
               $tab= $lecteur->getIdLecteur($nomUtilisateurL,$motdepasseL);
                              foreach($tab as $data){
                                      @$IdLecteur=$data['IdLecteur'];
                              }
                              
                              if(!empty($IdLecteur)){ 
                                  session_start();
                                $_SESSION['IdLecteur']=$IdLecteur;
                                 header("location:../views/updateLecteur.php");
                              }else{
                        }
                }
                
     }else{
      $message='<script>alert("champs laisser vide")</script>';
     }  
//   recuperation de  donnees avec idlecteur en get
 isset($IdLec)?$IdLec:'';
 if(isset($IdLec)){
    $tab=$lecteur->getData($IdLec);
    foreach ($tab as $data): 
         $idCateLec=$data['idCateLec'];
          $NomsLecteur=$data['NomsLecteur'];
          $emailLec=$data['emailLec'];
          $dateNaissanceL=$data['dateNaissanceL'];
          $lieuNaissanceL=$data['lieuNaissanceL'];
          $AdressesL=$data['AdressesL'];
          $niveauEtudeL=$data['niveauEtudeL'];
          $universiteL=$data['universiteL'];
          $nomUtilisateurL=$data['nomUtilisateurL'];
    endforeach;

 }
 if(isset($_POST['btnModifierLecteur'])){
   if(
      !empty($_POST['idCateLec']) &&
       !empty($_POST['NomsLecteur']) &&
       !empty($_POST['emailLec']) &&
       !empty($_POST['dateNaissanceL']) &&
       !empty($_POST['lieuNaissanceL']) &&
       !empty($_POST['AdressesL']) &&
       !empty($_POST['niveauEtudeL']) &&
       !empty($_POST['universiteL']) &&
       !empty($_POST['nomUtilisateurL']) 
       ){
      // un peu de securite
      
       $idCateLec= htmlspecialchars(strip_tags( trim($_POST['idCateLec'])));
       $NomsLecteur= htmlspecialchars(strip_tags( trim($_POST['NomsLecteur'])));
       $emailLec= htmlspecialchars(strip_tags( trim($_POST['emailLec'])));
       $dateNaissanceL= htmlspecialchars(strip_tags( trim($_POST['dateNaissanceL'])));
       $lieuNaissanceL= htmlspecialchars(strip_tags( trim($_POST['lieuNaissanceL'])));
       $AdressesL= htmlspecialchars(strip_tags( trim($_POST['AdressesL'])));
       $niveauEtudeL= htmlspecialchars(strip_tags( trim($_POST['niveauEtudeL'])));
       $universiteL= htmlspecialchars(strip_tags( trim($_POST['universiteL'])));
       $nomUtilisateurL= htmlspecialchars(strip_tags( trim($_POST['nomUtilisateurL'])));
       try {
         $lecteur->UpdateLecteur($idCateLec,$NomsLecteur,$emailLec,$dateNaissanceL,$lieuNaissanceL,$AdressesL,$niveauEtudeL,$universiteL,$nomUtilisateurL,$IdLec);
         header("location:../views/login.php");
  } catch (Exception $e) {
        echo $e->getMessage();
  }
 }else{
   ?>
   <script>alert("champs laissé vide")</script>
   <?php
 }
}