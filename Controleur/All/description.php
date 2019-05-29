<?php
// include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");
include("View/Template/templateTopAll.html");


$idProduit=$_POST["idProduit"];
$reponse = description($idProduit);
 while ($donnees = $reponse->fetch()) {  
    include("View/Template/templateMidDescription.php");
 }


// 




?>