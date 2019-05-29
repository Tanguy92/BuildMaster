<?php	
include('Modele/select.php');
include('Modele/insert.php');

//Inserer la note dans la table notes
$seller = $_GET['vendeur'];
$points = $_GET['note'];
$add = insertNote($points, $seller);

//Select tous les notes et faire la moyenne actualiser la note du vendeur
$noter = selectNote($seller);
$n = $noter[0][0];
$actu = updateNote($n, $seller); 

include('View/Template/templateTop.html');
include('View/Vendeur/okNote.php');

?>