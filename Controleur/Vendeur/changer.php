<?php
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

//Upload les nouvelles infos que la personne a modifie
$s = selectSpecMembre($_SESSION['id']);
include('View/Vendeur/change.php');

?>