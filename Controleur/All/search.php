<?php
include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");
$_SESSION["search"] =$_POST["search"];

//print_r($_SESSION);
include("View/Template/templateTopAll.html");

echo $_SESSION["search"];

include("View/Template/templateMidAll.php");

?>
