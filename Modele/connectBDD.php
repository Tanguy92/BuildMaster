<?php

// Connection BDD
// Indiquer votre ID
$id = "root";

// Indiquer votre Mot de passe
$passs = "";

$bdd = new PDO('mysql:host=localhost;dbname=buildmaster;charset=utf8', "$id","$passs");
$GLOBALS["bdd"]=$bdd;

?>
