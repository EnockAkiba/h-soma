<?php
require_once "../config/database.php";
   class SuperClass{
    public function __construct()
    {
        $this->pdo=getPDO();
    }
       public function SuperMethod($Select, $table, $critere){
            $sql=$this->pdo->prepare("SELECT $Select from $table where $critere");
             $sql->execute();
            $resultat=$sql->fetchAll();
            return $resultat;
        }
        // public function method($table,$champs, $array, $param){
        //         $sql=$this->pdo->prepare("INSERT INTO $table($champs) values ($array)");
        //         $sql->execute([$param]);
        //         return "enregsitrement reusie";
        // }
    }
    //  $es= new SuperClass();
    //  $a="lorem20";
    //  $b="informati";
    //  echo $es->method("categorieouv","designationCat,descriptionCat","?,?","'$a','$b' ");