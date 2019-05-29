<?php
// include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");
include("View/Template/templateTopAll.html");


$idMagasin=$_POST["idMembre"];
$reponse =descriptionMagasin($idMagasin);
 while ($donnees = $reponse->fetch()) {  
    echo $donnees["idMembre"],"puteee";
    include("View/Template/templateMidMagasin.php");
 }
 







?>