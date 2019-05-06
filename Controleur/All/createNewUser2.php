<?php
session_start();
include("Modele/connectBDD.php");

// include("View/Template/templateTopAll.html");
$_SESSION['magasin'] = $_POST['magasin'];
$_SESSION['theme'] = $_POST['theme'];
$_SESSION['adresse'] = $_POST['adresse'];




$grade = $_SESSION['grade'];



// Condition Vendeur 
if ($grade === "v") {
    // Insertion sql
    include("Modele/Insert/createUser.php");
    // HTML VENDEUR
    include("View/Vendeur/template.html");
}
