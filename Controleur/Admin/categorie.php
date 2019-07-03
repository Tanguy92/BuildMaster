<?php
include("Modele/connectBDD.php");
include("View/Template/templateTopAdmin.html");
include("Modele/select.php");
include("Modele/insert.php");
include("Modele/delete.php");

if (isset($_POST['ajoutCategorie'])) {
    $nom = $_POST['ajoutCategorie'];
    $ajoutCategorie = insertCategorie($nom);
   
}

if (isset($_POST['supprCategorie'])){
    $idCategorie = $_POST['supprCategorie'];
    updateDeleteCategorie($idCategorie);
    $supprCategorie = deleteCategorie($idCategorie);
}

$reponse = selectAllCategorie();
while ($donnees = $reponse->fetch()) {
    $idCategorie = $donnees['idCategorie'];
    $nom = $donnees['nom'];
}

include("View/Admin/categorie.php");
?>