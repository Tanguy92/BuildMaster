<?php
include('Modele/connectBDD.php');
include('Modele/select.php');

$idMembre = selectIdMembre();
while ($donnees2 = $idMembre -> fetch()) {
    $statut = $donnees2["statut"];
}
if($statut == "v"){
    include('View/Template/templateTop.html');
}elseif ($statut == "c") {
    include("View/Template/templateTopAllClient.php");
} else {
    include("View/Template/templateTopAdmin.html");
}

//Menu deroulant avec les membre a signaler
$donnees = selectMembre($bdd);
include ('View/Vendeur/note.php');
?>