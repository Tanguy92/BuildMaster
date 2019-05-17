<?php
include("Modele/connectBDD.php");
// $bdd = $GLOBALS["bdd"];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['mail'] = $_POST['mail'];


// include("BuildMaster/Modele/Insert/selectMdp.php");
// include("BuildMaster/Modele/Insert/selectPseudo.php");
// include("BuildMaster/Modele/Insert/selectStatut.php");














$reponse = $bdd->prepare("SELECT `mdp` FROM `membre` WHERE `mail` LIKE :mail");
$reponse->execute(array(
    'mail' => $_SESSION['mail']
));


while ($donnees = $reponse->fetch()) {
   $mdp = $donnees['mdp'] ;
}
// //// recuperation du  pseudo

$reponse2 = $bdd->prepare("SELECT `prenom` FROM `membre` WHERE `mail` LIKE :mail");
$reponse2->execute(array(
    'mail' => $_SESSION['mail']
));


while ($donnees2 = $reponse2->fetch()) {
   $_SESSION['prenom'] = $donnees2['prenom'] ;
}

// //// recuperation du grade

$reponse3 = $bdd->prepare("SELECT `statut` FROM `membre` WHERE `mail` LIKE :mail");
$reponse3->execute(array(
    'mail' => $_SESSION['mail']
));


while ($donnees3 = $reponse3->fetch()) {
   $grade = $donnees3['statut'] ;
}
// //// redirection de compte
if ($mdp === $_SESSION['pass'] && $grade === "v" ) {
    include ("View/Vendeur/template.php");
    
}elseif($mdp === $_SESSION['pass'] && $grade === "a"){
    include ("View/Admin/template.php");
}
