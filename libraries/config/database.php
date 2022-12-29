<?php
/**
 * @return PDO
 */

function getPDO() : PDO
    {
  try {
    $pdo=new PDO('mysql:host=localhost;dbname=soma','root','');
    return $pdo;
  } catch (PDOException $e) {
      echo "erreur:".$e->getMessage();
  } 
    }