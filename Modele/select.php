<?php
include("Modele/connectBDD.php");

function selectCategorie(){
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM Categorie");
    return $reponse;
}

function selectArticle(){
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM Article");
    return $reponse;
}


?>