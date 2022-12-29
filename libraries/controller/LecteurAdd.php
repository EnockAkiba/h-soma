<?PHP
//  appel de la class Exception.class.php
require_once '../model/Lecteur.class.php';
$lecteur= new Lecteur();
// variables pour envoyer des notifications 
$success=null;
$danger=null;
$warning=null;
//  traitement de donnees de l'auteur

if(isset($_POST['btnAddLecteur'])){
   
   if(
       !empty($_POST['nomLec']) &&
        !empty($_POST['prenomLec']) &&
        !empty($_POST['sexeLec']) &&
        !empty($_POST['dateNaissLec']) &&
        !empty($_POST['villeLec']) &&
        !empty($_POST['emailLec']) &&
        !empty($_FILES['photoLec']) &&
        !empty($_POST['userNameLec']) &&
        !empty($_POST['passwordLec']) 
        ){
       // un peu de securite
         $nomLec= htmlspecialchars(strip_tags( trim($_POST['nomLec'])));
        $prenomLec= htmlspecialchars(strip_tags( trim($_POST['prenomLec'])));
        $sexeLec= htmlspecialchars(strip_tags( trim($_POST['sexeLec'])));
        $dateNaissLec= htmlspecialchars(strip_tags( trim($_POST['dateNaissLec'])));
        $villeLec= htmlspecialchars(strip_tags( trim($_POST['villeLec'])));
        $emailLec= htmlspecialchars(strip_tags( trim($_POST['emailLec'])));
        $userNameLec= htmlspecialchars(strip_tags( trim($_POST['userNameLec'])));
        $passwordLec= htmlspecialchars(strip_tags( trim($_POST['passwordLec'])));
       //  test si la photo existe 
        if(isset($_FILES['photoLec']) ){
           //  test si la taille de la photo
            if($_FILES['photoLec']['size'] <= 8000000){
                //recuperation des extensions
                       $infofile = pathinfo($_FILES['photoLec']['name']);
                       $fextension_up = $infofile['extension'];
                       //extension autorisée
                       $extension_autorise = array('jpg', 'img', 'PNG');
                       //text sur les extension
                       if(in_array($fextension_up, $extension_autorise)){
                   $pdfname = $_FILES['photoLec']['name'];
                             $liens = "imageSave/".$pdfname;
                             move_uploaded_file($_FILES['photoLec']['tmp_name'], 'imageSave/'.basename($_FILES['photoLec']['name']));
                             // insertion dans la base de donnés
                             $chemin = $_FILES['photoLec']['name'];
                   $lecteur->AddLecteur($nomLec, $prenomLec, $sexeLec, $dateNaissLec, $villeLec, $emailLec, $chemin, $userNameLec, $passwordLec);
                    if($lecteur){
                        $success=$nomLec." Votre compte est créé avec succes ";
                    }else{
                        $danger="Une erreur s'est produite, Veuillez réessayer";
                    }
                             //insertion
               }else{
                   $warning="le format non autorisé";
               }
            }else{
                $warning="la taille de photo ne pas supportable";
            }
        }else{
            $warning="vous devez ajouter une photo de profil";
        }
                               
              
   }else{
        $warning='aucun champs ne doit etre vide';
   }
}  
require_once '../views/user.html.php';