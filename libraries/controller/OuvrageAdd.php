<?PHP
//  appel de la class Exception.class.php
require_once '../model/Ouvrage.class.php';
$Ouvrage= new Ouvrage();
// variables pour envoyer des notifications 
$success=null;
$danger=null;
$warning=null;
//  traitement de donnees de l'auteur

if(isset($_POST['btnOuvrage'])){
   
   if(
       !empty($_POST['idAut']) &&
        !empty($_POST['idCatOuvr']) &&
        !empty($_POST['titreOuvr']) &&
        !empty($_POST['domaineOuvr']) &&
        !empty($_POST['editionOuvr']) &&
        !empty($_POST['langueOuvr']) &&
        !empty($_FILES['photoOuvr']) &&
        !empty($_FILES['fichierOuvr'])
    ){
       // un peu de securite
         $idAut= htmlspecialchars(strip_tags( trim($_POST['idAut'])));
        $idCatOuvr = htmlspecialchars(strip_tags( trim($_POST['idCatOuvr'])));
        $titreOuvr= htmlspecialchars(strip_tags( trim($_POST['titreOuvr'])));
        $domaineOuvr= htmlspecialchars(strip_tags( trim($_POST['domaineOuvr'])));
        $editionOuvr= htmlspecialchars(strip_tags( trim($_POST['editionOuvr'])));
        $langueOuvr= htmlspecialchars(strip_tags( trim($_POST['langueOuvr'])));
       //  test si la photo existe 
        if(isset($_FILES['photoOuvr']) ){
           //  test si la taille de la photo
            if($_FILES['photoOuvr']['size'] <= 8000000 and $_FILES['fichierOuvr']['size'] <= 8000000){
                //recuperation des extensions photo
                       $infofile1 = pathinfo($_FILES['photoOuvr']['name']);
                       $fextension_up1 = $infofile1['extension'];
                       //extension autorisée
                       $extension_autorise1 = array('jpg','JPG', 'img', 'PNG');
                       //text sur les extension

                        //recuperation des extensions fichier
                        $infofile2 = pathinfo($_FILES['fichierOuvr']['name']);
                        $fextension_up2 = $infofile2['extension'];
                        //extension autorisée
                        $extension_autorise2 = array('pdf', 'docx', 'txt');
                        //text sur les extension
                       if((in_array($fextension_up1, $extension_autorise1) and (in_array($fextension_up2, $extension_autorise2)))){
                             $pdfname1 = $_FILES['photoOuvr']['name'];
                             $liens1 = "imageSave/".$pdfname1;
                             $pdfname2 = $_FILES['fichierOuvr']['name'];
                             $liens2 = "imageSave/".$pdfname2;
                             move_uploaded_file($_FILES['fichierOuvr']['tmp_name'], 'imageSave/'.basename($_FILES['fichierOuvr']['name']));
                             move_uploaded_file($_FILES['photoOuvr']['tmp_name'], 'imageSave/'.basename($_FILES['photoOuvr']['name']));
                             // insertion dans la base de donnés
                             $chemin1 = $_FILES['photoOuvr']['name'];
                             $chemin2 = $_FILES['fichierOuvr']['name'];
                   $Ouvrage->AddOuvrage($idCatOuvr,$idAut, $titreOuvr, $domaineOuvr, $chemin1, $editionOuvr, $langueOuvr, $chemin2);
                    if($Ouvrage){
                        $success="L'ouvrage ". $titreOuvr." envoyé";
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

require_once '../views/ouvrage.html.php';