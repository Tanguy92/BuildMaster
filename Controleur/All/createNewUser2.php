<?php
session_start();
include("Modele/connectBDD.php");

// include("View/Template/templateTopAll.html");
$_SESSION['magasin'] = $_POST['magasin'];
$_SESSION['theme'] = $_POST['theme'];
$_SESSION['adresse'] = $_POST['adresse'];




$grade =$_SESSION['grade'];



// Condition Vendeur 
if ($grade === "v"){
    
    $reponse = $bdd->prepare("INSERT INTO `Membre` (`nom`, `prenom`, `mail`, `mdp`, `adresse`, `idTheme`, `statut`, `magasin`) 
    VALUES (:nom,:prenom,:mail,:pass,:adresse,:theme,:grade,:magasin);");
    $reponse->execute(array(
        'nom' => $_SESSION['nom'],
        'prenom' => $_SESSION["prenom"],
        'mail' => $_SESSION["mail"],
        'pass' => $_SESSION["pass"],
        'adresse' => $_SESSION["adresse"],
        'theme' => $_SESSION["theme"],
        'grade' => $_SESSION["grade"],
        'magasin' => $_SESSION["magasin"]
    ));
    echo $grade;
    // ));
    // Inster    
    include("View/Vendeur/template.html");           

    }

    // header("Location: index.php");
    


?>
