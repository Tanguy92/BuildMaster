<?php
include("Modele/connectBDD.php");
include("Modele/select.php");
// $bdd = $GLOBALS["bdd"];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['mail'] = $_POST['mail'];

////// Requete Sql ///////////


$id = detId();
$_SESSION['id'] = $id;

$_SESSION['prenom'] = prenom();
$grade = statut();
$mdp = mdp();

// //// redirection de compte ///////////

if ($mdp === $_SESSION['pass'] && $grade === "v" ) {
    include ("Controleur/Vendeur/boiteOutil.php");
    
}elseif($mdp === $_SESSION['pass'] && $grade === "a"){
    include ("Controleur/Admin/boiteOutil.php");
}else {
    include ("Controleur/All/retry.php");
}

?>