<?php
include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");




// include("View/Template/templateTopAll.html");
$_SESSION['magasin'] = $_POST['magasin'];
$_SESSION['theme'] = $_POST['theme'];
$_SESSION['adresse'] = $_POST['adresse'];




$grade = $_SESSION['grade'];
echo $grade;






// Condition Vendeur 
if ($grade === "v") {
    // Insertion sql
    createMembre();
    $id = detId();
    $_SESSION['id'] = $id;
    // HTML VENDEUR
    include("View/Vendeur/template.php");
}elseif ($grade === "c") {
    $_SESSION["magasin"] = "";
    $_SESSION["theme"]= 1;
    // Insertion sql
    createMembre();
    $id = detId();
    $_SESSION['id'] = $id;
    // HTML VENDEUR
    header ("refresh:0;url=index.php");
    include("View/All/acceuil.php");
}
?>
