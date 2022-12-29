<?php
             require_once "../config/database.php";
        class Ouvrage
        {
                // definition des attributs
                protected $idOuvr ;
                protected $idAut ;
                protected $idCatOuvr ;
                protected $titreOuvr;
                protected $domaineOuvr;
                protected $photoOuvr;
                protected $editionOuvr;
                protected $langueOuvr;
                protected $fichierOuvr;
                protected $pdo;

                // definitions des methodes
                public function __construct()
                {
                    $this->pdo=getPDO();
                }
                // methode de insertion de donnees
                public function AddOuvrage( $idCatOuvr ,$idAut,$titreOuvr, $domaineOuvr, $photoOuvr, $editionOuvr,$langueOuvr,$fichierOuvr){
                        $this->idCatOuvr =$idCatOuvr ;
                        $this->idAut =$idAut;
                        $this->titreOuvr=$titreOuvr;
                        $this->domaineOuvr=$domaineOuvr;
                        $this->photoOuvr=$photoOuvr;
                        $this->editionOuvr=$editionOuvr;
                        $this->langueOuvr=$langueOuvr;
                        $this->fichierOuvr=$fichierOuvr;

                         $sql=$this->pdo->prepare("INSERT INTO ouvrage(idCatOuvr,idAut ,titreOuvr,domaineOuvr,photoOuvr,editionOuvr,langueOuvr, fichierOuvr) values (?,?,?,?,?,?,?,?)");
                          $sql->execute([
                                 $this->idCatOuvr ,
                                 $this->idAut,
                                 $this->titreOuvr,
                                 $this->domaineOuvr,
                                 $this->photoOuvr,
                                 $this->editionOuvr,
                                 $this->langueOuvr,   
                                 $this->fichierOuvr
                          ]);
                           $message="enregistrement reusi";
                           return $message;
                }
                // recupation de IdLecteur 
                public function getIdLecteur($passwordLec,$motdepasseL){
                    $this->passwordLec=$passwordLec;
                    $this->motdepasseL=$motdepasseL;
                     $sql=$this->pdo->prepare("SELECT IdLecteur from Ouvrage where passwordLec=? and motdepasseL=?");
                     $sql->execute([
                             $this->passwordLec,
                         $this->motdepasseL
                  ]);
                   $tab=$sql->fetch();
                   return $tab;
                }   
                // methode de modification 
                public function UpdateLecteur($idCatOuvr ,  $titreOuvr, $domaineOuvr, $photoOuvr, $editionOuvr,$langueOuvr,$fichierOuvr,$userNameLec ,$passwordLec ,$IdLecteur){
                    $this->idCatOuvr =$idCatOuvr ;
                    $this->IdLecteur=$IdLecteur;
                    $this->titreOuvr=$titreOuvr;
                   $this->domaineOuvr=$domaineOuvr;
                   $this->photoOuvr=$photoOuvr;
                   $this->editionOuvr=$editionOuvr;
                   $this->langueOuvr=$langueOuvr;
                   $this->fichierOuvr=$fichierOuvr;
                   $this->userNameLec =$userNameLec ;
                   $this->passwordLec=$passwordLec;

                   $sql=$this->pdo->prepare("UPDATE  Ouvrage SET idCatOuvr =?,titreOuvr=?,domaineOuvr=?,photoOuvr=?,editionOuvr=?,langueOuvr=?, fichierOuvr=?,userNameLec =?,passwordLec=?   where  IdLecteur=?");
                    $sql->execute([
                          $this->idCatOuvr ,
                           $this->titreOuvr,
                           $this->domaineOuvr,
                           $this->photoOuvr,
                           $this->editionOuvr,
                           $this->langueOuvr,   
                             $this->fichierOuvr,
                             $this->userNameLec ,   
                               $this->passwordLec,
                           $this->IdLecteur
                    ]);
                     $message="modification  réusie ";
                     return $message;
          }
           public function getData($IdLecteur){
             $this->IdLecteur=$IdLecteur;
                    $sql=$this->pdo->prepare("SELECT * from Ouvrage where IdLecteur=? ");
                    $sql->execute([
                            $this->IdLecteur
                ]);
                  $tab=$sql->fetchAll();
                  return $tab;
              }

              // CETTE METHODE VA ME PERMETTRE D'OPTENIR LE NOMBRE DE COM
              public function getCommentaires($idOuvr){
                $this->idOuvr=$idOuvr;
                $sql=$this->pdo->prepare('SELECT  Ouvr.titreOuvr,Ouvr.domaineOuvr,Ouvr.photoOuvr,Ouvr.langueOuvr,Aut.nomAut,Aut.prenomAut,
                (SELECT COUNT(commenter.idCom) FROM commenter WHERE commenter.idOuvr=Ouvr.idOuvr) as commentaires,
                (SELECT COUNT(aimer.idAimer) FROM aimer WHERE Ouvr.idOuvr=aimer.idAimer) AS aimes FROM ouvrage AS Ouvr 
                INNER JOIN auteur AS Aut ON Aut.idAut=Ouvr.idAut WHERE Ouvr.idOuvr=? ORDER BY commentaires DESC, aimes DESC LIMIT 10');
                $sql->execute([$this->idOuvr]);
                $tab=$sql->fetchAll();
                return $tab;
              }

        }      
