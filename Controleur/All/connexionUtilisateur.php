<?php
session_start();
include("Modele/connectBDD.php");
include("Modele/select.php");
// $bdd = $GLOBALS["bdd"];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['mail'] = $_POST['mail'];

////// Requete Sql ///////////
$mdp = mdp();
$_SESSION['prenom'] = prenom();
$grade = statut();

// //// redirection de compte ///////////
if ($mdp === $_SESSION['pass'] && $grade === "v" ) {
    include ("View/Vendeur/template.php");
    
}elseif($mdp === $_SESSION['pass'] && $grade === "a"){
    include ("View/Admin/template.php");
}
