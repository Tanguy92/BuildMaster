<?php
include('Modele/connectBDD.php');
include('Modele/select.php');

$selectidMembre = selectIdMembre();
while ($donnees2 = $selectidMembre->fetch()) {
    $statut = $donnees2["statut"];
    $idMembre = $donnees2["idMembre"];
}

if(isset($statut)){

    if($statut == "v"){
        include('View/Template/templateTop.html');
    }elseif ($statut == "c") {
        include("View/Template/templateTopAllClient.php");
    } else {
        include("View/Template/templateTopAdmin.html");
    }
}

//Menu deroulant avec les membre a signaler
$donnees = selectMembre($bdd);
include ('View/Vendeur/signalement.php');
?>