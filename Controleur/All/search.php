<?php
// include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");

if (isset($_POST["search"])) {
    $_SESSION["search"] = $_POST["search"];
}



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


if (isset($_POST["search"])) {
    $search = $_SESSION["search"];
} else {
    $search = "";
}

    $reponse = search($search);
    $reponse2 = search2($search);
    
if(isset($_POST["categorie"])){    
    $searchCate = $_POST["categorie"];
} else {
    $searchCate = "";
}

$reponse3 = search3($searchCate);




include("View/Template/templateMidSearch.php");

?>
