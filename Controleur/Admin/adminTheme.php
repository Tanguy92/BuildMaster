<?php
include("Modele/connectBDD.php");
include("View/Template/templateTop.html");
include("Modele/select.php");
include("Modele/insert.php");
include("Modele/delete.php");

/*if ( isset($_GET['page'])) {
    if ( isset($_POST['Ajouter'])) {
        //include('View/Admin/ajouter.php');
    } elseif ( isset($_POST['Modifier'])) {
        include('View/Admin/modifier.php');
    } elseif ( isset($_POST['Supprimer'])) {
        include('View/Admin/supprimer.php');
    }
}*/

    $reponse = selectAllTheme();
    while ($donnees = $reponse->fetch()) {
        //include("View/Admin/adminTheme.php");
        $idTheme = $donnees['idTheme'];
        $nom = $donnees['nom'];
    }

    if (isset($_POST["newColor"]) || isset($_POST["newColorName"])) {
        $nom = $_POST["newColorName"];
        $couleur = $_POST["newColor"];
        $ajoutTheme = insertTheme($nom, $couleur);
        while ($donnees = $reponse->fetch()) {
        }
    
    }

    if (isset($_POST["oldColor"])) {
        $toto = $_POST["oldColor"];
        $supprTheme = deleteTheme($toto);  
    }


include("View/Admin/adminTheme.php");
//include("View/Admin/adminTheme.php");
// Get la valeur depuis la vue (le numéro du thème) et le mettre dans la variable


// Permet d'accéder aux fonctions de select.php
//include("select.php");

// Stocke le résultat de la requête (la couileur en héxadécimal sous forme de string) dans une variable
//$color = selectTheme($themeId);

// Renvoie sur la vue que tu veux avec dans la query la couleur choisie, à mettre en paramètre de la fonction changeBackgroundColor()

?>