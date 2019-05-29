<?php
// include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");
$_SESSION["search"] = $_POST["search"];

//print_r($_SESSION);
include("View/Template/templateTopAll.html");

$search = $_SESSION["search"];


$reponse = search($search);


// while ($donnees = $reponse->fetch()) {
//     include("Controleur/Client/function.php");
//     echo $donnees["prix"];
    
// }

include("View/Template/templateMidSearch.php");

?>
