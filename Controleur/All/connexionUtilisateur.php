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
$_SESSION["grade"] = $grade;
$mdp = mdp();

// //// redirection de compte ///////////

if ($mdp === $_SESSION['pass'] && $grade === "v" ) {
    $_SESSION["connect"] = true;
   // include ("Controleur/Vendeur/boiteOutil.php");
    header ("refresh:0;url=index.php?page=boiteOutilV");
    
}elseif($mdp === $_SESSION['pass'] && $grade === "a"){
    $_SESSION["connect"] = true;
 //   include ("Controleur/Admin/boiteOutil.php");
    header ("refresh:0;url=index.php?page=boiteOutilA");
}elseif($mdp === $_SESSION['pass'] && $grade === "c"){
    $_SESSION["connect"] = true;
    header ("refresh:0;url=index.php?page=acceuilClient");
}else {
    $_SESSION["connect"] = false;
    include ("Controleur/All/retry.php");
}

?>