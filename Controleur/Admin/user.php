<?php
include('Modele/connectBDD.php');
include('View/Template/templateTopAdmin.html');
include('Modele/select.php');

//Selectionner tous les vendeurs et faire une table
$v = selectV($bdd);
include('View/Admin/table.php');

//Selectionner tous les clients et faire une table
$c = selectC($bdd);
include('View/Admin/tableC.php');
?>