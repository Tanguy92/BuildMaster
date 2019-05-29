<?php
include('View/Template/templateTop.html');
include('Modele/select.php');
//Upload les nouvelles infos que la personne a modifie
$s = selectSpecMembre($_SESSION['id']);
include('View/Vendeur/change.php');

?>