<?php
include("Modele/connectBDD.php");
include("View/Template/templateTopAll.html");


$_SESSION['pass'] = $_POST['pass'];
$_SESSION['grade'] = $_POST['grade'];
$_SESSION['mail'] = $_POST['mail'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
// foreach($_POST as $name => $value){
//     $_SESSION[$key] = $value;
// }

$nom =   $_SESSION['nom'];
$prenom =   $_SESSION['prenom'];
$mail =  $_SESSION['mail'];
$grade =$_SESSION['grade'];
$pass =$_SESSION['pass'];
if(isset($_SESSION['adresse'])){
    $adresse =$_SESSION['adresse'];
}

// Condition Vendeur 
if ($grade == "v"){
    
    // $reponse = $bdd->prepare("INSERT INTO `Membre` (`idMembre`, `nom`, `prenom`, `mail`, `mdp`, `adresse`, `idTheme`, `statut`)  VALUES (NULL,:nom,:prenom,:mail,:mdp,:adresse,1,:statut);");
    // $reponse->execute(array(
    //     'nom' => $_SESSION['nom'],
    //     'prenom' => $_SESSION["prenom"],
    //     'mail' => $_SESSION["mail"],
    //     'mdp' => $_SESSION["pass"],
    //     'adresse' => 'toto',
    //     'statut' => $_SESSION["grade"]


    // ));
    // Inster    
    include("View/All/newUserV.html");           

    // }

    // header("Location: index.php");
    

}elseif ($grade == "c"){
    
     include("Controleur/All/createNewUser2.php");  
}
?>
