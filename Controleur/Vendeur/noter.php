<?php
include('Modele/connectBDD.php');
include('View/Template/templateTop.html');
include('Modele/select.php');

//Menu deroulant avec les membre a signaler
$donnees = selectMembre($bdd);
include ('View/Vendeur/note.php');
?>