<?PHP
//  appel de la class Exception.class.php
require_once '../model/Commenter.class.php';
$Ouvrage= new Commenter();

$data=$Ouvrage->getOuvrage(2);
// variables pour envoyer des notifications 


//  traitement de donnees de l'auteur


require_once '../views/commentaire.html.php';