<?php
session_start();
include("/BuildMaster/Modele/connectBDD.php");
include("View/Template/templateTopAll.html");

$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['pass'] = $_POST['pass'];
$_SESSION['grade'] = $_POST['grade'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['adresse'] = $_POST['adresse'];
// foreach($_POST as $name => $value){
//     $_SESSION[$key] = $value;
// }

$nom =   $_SESSION['nom'];
$prenom =   $_SESSION['prenom'];
$mail =  $_SESSION['mail'];
$grade =$_SESSION['grade'];
$pass =$_SESSION['pass'];
$adresse =$_SESSION['adresse'];

// Condition Vendeur 
if ($grade === 'v'){
    

    // Inster    
    $bdd->exec("INSERT INTO `Membre` (`idMembre`, `nom`, `prenom`, `mail`, `mdp`,`statut` ) VALUES (NULL, '$nom', '$prenom', '$mail', '$pass','$grade');");
    include("View/All/newUserV.html");

    // }

    // header("Location: index.php");
    

}
?>
