<?php
include("Modele/connectBDD.php");
include("View/Template/templateTopAdmin.html");
include("Modele/select.php");
include("Modele/insert.php");
include("Modele/delete.php");
include("View/Admin/categorie.php");

$reponse = selectAllCategorie();
while ($donnees = $reponse->fetch()) {
    $idCategorie = $donnees['idCategorie'];
    $nom = $donnees['nom'];
}

if (isset($_POST['ajoutCategorie'])) {
    $nom = $_POST['ajoutCategorie'];
    $ajoutCategorie = insertCategorie($nom);
    header('Location: index.php?page=categorie');
    while ($donnees = $reponse->fetch()) {
    }
}

if (isset($_POST['supprCategorie'])){
    $idCategorie = $_POST['supprCategorie'];
    updateDeleteCategorie($idCategorie);
    $supprCategorie = deleteCategorie($idCategorie);
    header('Location: index.php?page=categorie');
}


?>