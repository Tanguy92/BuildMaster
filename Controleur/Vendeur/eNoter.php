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
include('View/Vendeur/okNote.php');

?>