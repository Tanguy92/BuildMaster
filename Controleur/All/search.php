<?php
// include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");
$_SESSION["search"] = $_POST["search"];


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
    } 
}else {
   include("View/Template/templateTopAll.html");
}

$search = $_SESSION["search"];


$reponse = search($search);


// while ($donnees = $reponse->fetch()) {
//     include("Controleur/Client/function.php");
//     echo $donnees["prix"];
    
// }

include("View/Template/templateMidSearch.php");

?>
