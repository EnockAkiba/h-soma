<?php
require_once "../config/database.php";
require_once 'SuperClass.class.php';
class Commenter extends SuperClass{
    // definition des attributs
    private $idOuvr;
    protected $nomAut;
    protected $prenomAut;
    protected $sexeAut;
    protected $dateNaissAut;
    protected $villeAut;
    protected $emailAut;
    protected $photoAut;
    protected $userNameAut;
    protected $passwordAut;
    protected $pdo;

    // definitions des methodes
    public function __construct(){
        $this->pdo=getPDO();
    }
    // methode de insertion de donnees
    public function AddAuteur( $nomAut,$prenomAut, $sexeAut, $dateNaissAut, $villeAut,$emailAut,$photoAut,$userNameAut,$passwordAut){
        $this->nomAut=$nomAut;
        $this->prenomAut=$prenomAut;
        $this->sexeAut=$sexeAut;
        $this->dateNaissAut=$dateNaissAut;
        $this->villeAut=$villeAut;
        $this->emailAut=$emailAut;
        $this->photoAut=$photoAut;
        $this->userNameAut=$userNameAut;
        $this->passwordAut=$passwordAut;

        $sql=$this->pdo->prepare("INSERT INTO auteur(nomAut,prenomAut,sexeAut,dateNaissAut,villeAut,emailAut,photoAut, userNameAut,passwordAut) values (?,?,?,?,?,?,?,?,?)");
        $sql->execute([
            $this->nomAut,
            $this->prenomAut,
            $this->sexeAut,
            $this->dateNaissAut,
            $this->villeAut,
            $this->emailAut,   
            $this->photoAut,
            $this->userNameAut,   
            $this->passwordAut
        ]);
        $success="enregistrement reusi";
        return $success;
    }

        // recupation de IdLecteur 
    public function getOuvrage($idOuvr){
        $this->idOuvr=$idOuvr;
        $sql=$this->pdo->prepare("SELECT titreOuvr,domaineOuvr,photoOuvr,editionOuvr,langueOuvr,dateOuvr, auteur.nomAut from ouvrage inner JOIN auteur on auteur.idAut=ouvrage.idAut where  ouvrage.idOuvr=?");
        $sql->execute([
                $this->idOuvr
            ]);
        $tab=$sql->fetch(PDO::FETCH_ASSOC);
        return $tab;  
    }   

                // methode de modification 
                public function UpdateAuteur( $nomAut,$prenomAut, $sexeAut, $dateNaissAut, $villeAut,$emailAut,$userNameAut,$passwordAut ,$idAut){
                         $this->idAut=$idAut;
                         $this->nomAut=$nomAut;
                         $this->prenomAut=$prenomAut;
                         $this->sexeAut=$sexeAut;
                         $this->dateNaissAut=$dateNaissAut;
                         $this->villeAut=$villeAut;
                         $this->emailAut=$emailAut;
                        //  $this->photoAut=$photoAut;
                         $this->userNameAut=$userNameAut;
                         $this->passwordAut=$passwordAut;

                   $sql=$this->pdo->prepare("UPDATE  auteur SET nomAut=?,prenomAut=?,sexeAut=?,dateNaissAut=?,villeAut=?,emailAut=?,userNameAut=?,passwordAut=?   where  idAut=?");
                   $sql->execute([
                    $this->nomAut,
                     $this->prenomAut,
                     $this->sexeAut,
                     $this->dateNaissAut,
                     $this->villeAut,
                     $this->emailAut,   
                    //  $this->photoAut,
                     $this->userNameAut,   
                     $this->passwordAut,
                     $this->idAut,
              ]);
                     $success="modification  réusie ";
                     return $success;
          }
           public function getData($idAut){
             $this->idAut=$idAut;
                    $sql=$this->pdo->prepare("SELECT * from auteur where idAut=? ");
                    $sql->execute([
                            $this->idAut
                ]);
                  $tab=$sql->fetchAll(PDO::FETCH_ASSOC);
                  return $tab;
              }   
        }          
        // echo "tesuu";