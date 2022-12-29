<?php
             require_once "../config/database.php";
              require_once 'SuperClass.class.php';
        class Lecteur extends SuperClass
        {
                // definition des attributs
                protected $idLec;
                protected $nomLec;
                protected $prenomLec;
                protected $sexeLec;
                protected $dateNaissLec;
                protected $villeLec;
                protected $emailLec;
                protected $photoLec;
                protected $userNameLec ;
                protected $passwordLec;
                protected $pdo;

                // definitions des methodes
                public function __construct()
                {
                    $this->pdo=getPDO();
                }
                // methode de insertion de donnees
                public function AddLecteur( $nomLec,  $prenomLec, $sexeLec, $dateNaissLec, $villeLec,$emailLec,$photoLec,$userNameLec ,$passwordLec){
                          $this->nomLec=$nomLec;
                          $this->prenomLec=$prenomLec;
                         $this->sexeLec=$sexeLec;
                         $this->dateNaissLec=$dateNaissLec;
                         $this->villeLec=$villeLec;
                         $this->emailLec=$emailLec;
                         $this->photoLec=$photoLec;
                         $this->userNameLec =$userNameLec ;
                         $this->passwordLec=$passwordLec;

                         $sql=$this->pdo->prepare("INSERT INTO lecteur(nomLec,prenomLec,sexeLec,dateNaissLec,villeLec,emailLec, photoLec,userNameLec ,passwordLec) values (?,?,?,?,?,?,?,?,?)");
                          $sql->execute([$this->nomLec,
                                 $this->prenomLec,
                                 $this->sexeLec,
                                 $this->dateNaissLec,
                                 $this->villeLec,
                                 $this->emailLec,   
                                 $this->photoLec,
                                 $this->userNameLec,   
                                 $this->passwordLec
                          ]);
                           $message="enregistrement reusi";
                           return $message;
                }
                // recupation de IdLecteur 
                public function getIdLecteur($passwordLec,$motdepasseL){
                    $this->passwordLec=$passwordLec;
                    $this->motdepasseL=$motdepasseL;
                     $sql=$this->pdo->prepare("SELECT IdLecteur from Lecteur where passwordLec=? and motdepasseL=?");
                     $sql->execute([
                             $this->passwordLec,
                         $this->motdepasseL
                  ]);
                   $tab=$sql->fetch();
                   return $tab;
                }   
                // methode de modification 
                public function UpdateLecteur($nomLec,  $prenomLec, $sexeLec, $dateNaissLec, $villeLec,$emailLec,$photoLec,$userNameLec ,$passwordLec ,$IdLecteur){
                    $this->nomLec=$nomLec;
                    $this->IdLecteur=$IdLecteur;
                    $this->prenomLec=$prenomLec;
                   $this->sexeLec=$sexeLec;
                   $this->dateNaissLec=$dateNaissLec;
                   $this->villeLec=$villeLec;
                   $this->emailLec=$emailLec;
                   $this->photoLec=$photoLec;
                   $this->userNameLec =$userNameLec ;
                   $this->passwordLec=$passwordLec;

                   $sql=$this->pdo->prepare("UPDATE  Lecteur SET nomLec=?,prenomLec=?,sexeLec=?,dateNaissLec=?,villeLec=?,emailLec=?, photoLec=?,userNameLec =?,passwordLec=?   where  IdLecteur=?");
                    $sql->execute([
                          $this->nomLec,
                           $this->prenomLec,
                           $this->sexeLec,
                           $this->dateNaissLec,
                           $this->villeLec,
                           $this->emailLec,   
                             $this->photoLec,
                             $this->userNameLec ,   
                               $this->passwordLec,
                           $this->IdLecteur
                    ]);
                     $message="modification  réusie ";
                     return $message;
          }
           public function getData($IdLecteur){
             $this->IdLecteur=$IdLecteur;
                    $sql=$this->pdo->prepare("SELECT * from Lecteur where IdLecteur=? ");
                    $sql->execute([
                            $this->IdLecteur
                ]);
                  $tab=$sql->fetchAll();
                  return $tab;
              }   
        }          
        