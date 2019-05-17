<?php
include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");




// include("View/Template/templateTopAll.html");
$_SESSION['magasin'] = $_POST['magasin'];
$_SESSION['theme'] = $_POST['theme'];
$_SESSION['adresse'] = $_POST['adresse'];




$grade = $_SESSION['grade'];



// Condition Vendeur 
if ($grade === "v") {
    // Insertion sql
    createMembre();
    $id = detId();
    $_SESSION['id'] = $id;
    // HTML VENDEUR
    include("View/Vendeur/template.php");
}
