<?php
 require_once '../model/Auteur.class.php';
 // initialisation des class \
 $auteur=new Auteur();

// modification du compte Auteur
if(isset($_POST['btnModAuteur'])){
    //  recuperation  ID  Aueteur avec sessionAuteur
    //  $idAut = $_SESSION['idAut']=$idAut;
    $idAut=1;
    if(
        !empty($_POST['nomAut']) &&
         !empty($_POST['prenomAut']) &&
         !empty($_POST['sexeAut']) &&
         !empty($_POST['dateNaissAut']) &&
         !empty($_POST['villeAut']) &&
         !empty($_POST['emailAut']) &&
         !empty($_POST['userNameAut']) &&
         !empty($_POST['passwordAut']) 
         ){
        // un peu de securite
      $nomAut= htmlspecialchars(strip_tags( trim($_POST['nomAut'])));
         $prenomAut= htmlspecialchars(strip_tags( trim($_POST['prenomAut'])));
         $sexeAut= htmlspecialchars(strip_tags( trim($_POST['sexeAut'])));
         $dateNaissAut= htmlspecialchars(strip_tags( trim($_POST['dateNaissAut'])));
         $villeAut= htmlspecialchars(strip_tags( trim($_POST['villeAut'])));
         $emailAut= htmlspecialchars(strip_tags( trim($_POST['emailAut'])));
         $userNameAut= htmlspecialchars(strip_tags( trim($_POST['userNameAut'])));
         $passwordAut= htmlspecialchars(strip_tags( trim($_POST['passwordAut'])));
        // //  test si la photo existe 
        //  if(isset($_FILES['photoAut']) ){
        //     //  test si la taille de la photo
        //      if($_FILES['photoAut']['size'] <= 8000000){
        //          //recuperation des extensions
		// 		$infofile = pathinfo($_FILES['photoAut']['name']);
		// 		$fextension_up = $infofile['extension'];
		// 		//extension autorisée
		// 		$extension_autorise = array('jpg', 'img', 'png');
		// 		//text sur les extension
		// 		if(in_array($fextension_up, $extension_autorise)){
        //             $pdfname = $_FILES['photoAut']['name'];
		// 			$liens = "imageSave/".$pdfname;
		// 			move_uploaded_file($_FILES['photoAut']['tmp_name'], 'imageSave/'.basename($_FILES['photoAut']['name']));
		// 			// insertion dans la base de donnés
		// 			$chemin = $_FILES['photoAut']['name'];
                    $auteur->UpdateAuteur($nomAut, $prenomAut, $sexeAut, $dateNaissAut, $villeAut, $emailAut, $userNameAut, $passwordAut, $idAut);
                         $success=$nomAut." Votre compte a été modifier";
//                 }else{
//                     $warning="le format non autorisé";
//                 }
//              }else{
//                  $warning="la taille de photo ne pas supportable";
//              }
//          }else{
//              $warning="vous devez ajouter une photo de profil";
//          }
                                
               
//     }else{
//          $warning='aucun champs ne doit etre vide';
     }
   }else{
    // $danger="vous ne pouvez pas modifier ce compte pour le moment";
}
require_once '../model/SuperClass.class.php';
$idAut=1;
  $tab=$auteur->SuperMethod("*","auteur", "idAut=$idAut");
   foreach($tab as $data){
       $nomAut=$data['nomAut'];
       $prenomAut= $data['prenomAut'];
       $sexeAut= $data['sexeAut'];
       $dateNaissAut= $data['dateNaissAut'];
       $villeAut=  $data['villeAut'];
       $emailAut=$data['emailAut'];
       $userNameAut= $data['userNameAut']; 
       $passwordAut=$data['passwordAut']; 
   }
//    appel views 
require_once '../views/updateAuteur.html.php';
?>