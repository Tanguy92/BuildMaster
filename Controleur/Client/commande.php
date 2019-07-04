<?php

include("View/Template/templateTopAllClient.php");
include("Modele/select.php");



$selectidMembre = selectIdMembre();

while ($donnees = $selectidMembre->fetch()) {
    $idMembre = $donnees["idMembre"];
}



$selectCommandeOuverte = selectCommandeOuverte($idMembre);

while ($donnees2 = $selectCommandeOuverte->fetch()) {
    $prix = $donnees2["prix"];
    $dateDebut = $donnees2["dateDebut"];
    $dateFin = $donnees2["dateFin"];
    $nom = $donnees2["prix"];
    $photo = $donnees2["photo"];
    include("View/Client/commandeOuverte.php");
}



$selectCommandeFerme = selectCommandeFerme($idMembre);



while ($donnees3 = $selectCommandeFerme->fetch()) {
    $prix2 = $donnees3["prix"];
    $dateDebut2 = $donnees3["dateDebut"];
    $dateFin2 = $donnees3["dateFin"];
    $nom2 = $donnees3["prix"];
    $photo2 = $donnees3["photo"];
    include("View/Client/commandeFerme.php");
}







?>