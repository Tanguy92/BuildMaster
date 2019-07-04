<?php
include("View/Template/templateTopAllClient.php");

include("Modele/select.php");
include("Modele/insert.php");
include("Modele/delete.php");

$echec = false;

$selectidMembre = selectIdMembre();

while ($donnees = $selectidMembre->fetch()) {
    $idMembre = $donnees["idMembre"];
}

$selectArticlePanier = selectArticlePanier($idMembre);



if (isset($_POST["supprimerPanier"])) {
    $idProduit = $_POST["supprimerPanier"];
    deletePanier($idProduit, $idMembre);
    header('Location: index.php?page=panier');
}

while ($donnees2 = $selectArticlePanier->fetch()) {
    if(!isset($_POST["commander"])){
        include("View/Client/panier.php");
    }
}

if(isset($_POST["dateDebut"]) && isset($_POST["dateFin"])){
    if($_POST["dateDebut"]> $_POST["dateFin"]){
        echo " La date de début de la location ne peut pas être supérieur à la date de fin <br>";
        $echec = true;
    }
    $selectDispo = selectDispo();

    while ($donnees3 = $selectDispo->fetch()) {
        if($donnees3["dateDebut"] <= $_POST["dateDebut"] && $_POST["dateDebut"] <= $donnees3["dateFin"]){
            echo "La date du début de votre location est déjà prise veuillez en choisir une autre. <br>";
            $echec = true;
        }

        if($donnees3["dateDebut"] <= $_POST["dateFin"] && $_POST["dateFin"] <= $donnees3["dateFin"]){
            echo "La date de fin de votre location est déjà prise veuillez en choisir une autre.";
            $echec = true;
        }
    }
  

}

if (isset($_POST["commander"]) && $echec != true) {

    $_SESSION["idProduit"] = $_POST["commander"];
    $_SESSION["dateDebut"] = $_POST["dateDebut"];
    $_SESSION["dateFin"] = $_POST["dateFin"];
    include("View/Client/carte.php");
}



if (isset($_POST["carte"])) {

    updateDeletePanier($_SESSION["idProduit"], $idMembre,$_SESSION["dateDebut"],$_SESSION["dateFin"]);
    header('Location: index.php?page=panier');
}



?>