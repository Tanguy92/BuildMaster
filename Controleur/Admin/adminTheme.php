<?php
include("Modele/connectBDD.php");
include("View/Template/templateTopAdmin.html");
include("Modele/select.php");
include("Modele/insert.php");
include("Modele/delete.php");

if (isset($_POST["newColor"]) || isset($_POST["newColorName"])) {   // Ajouter le thème en fonction du nom et de la couleur choisie par le user.
    $nom = $_POST["newColorName"];
    $couleur = $_POST["newColor"];
    $ajoutTheme = insertTheme($nom, $couleur);

}

if (isset($_POST["oldColor"])) {   // Supprimer un thème 
    $delete = $_POST["oldColor"];
    $supprTheme = deleteTheme($delete); 
}


    $reponse = selectAllTheme();
    while ($donnees = $reponse->fetch()) {
        $idTheme = $donnees['idTheme'];
        $nom = $donnees['nom'];
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