<?php
include('Modele/select.php');

$s = selectSpecMembre($_SESSION['id']);
    $statut = $s["statut"];

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