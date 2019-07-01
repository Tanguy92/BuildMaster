<?php
include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");




// include("View/Template/templateTopAll.html");
if(isset($_POST["magasin"])){
    $_SESSION['magasin'] = $_POST['magasin'];
    $_SESSION['adresse'] = $_POST['adresse'];
} else{
    $_SESSION["adresse"] = null;
}



$grade = $_SESSION['grade'];







// Condition Vendeur 
if ($grade === "v") {
    // Insertion sql
    createMembre();
    $id = detId();
    $_SESSION['id'] = $id;
    // HTML VENDEUR
    include("View/Vendeur/template.php");
}elseif ($grade === "c") {
    $_SESSION["magasin"] = null;
    $_SESSION["theme"]= 1;
    // Insertion sql
    createMembre();
    $id = detId();
    $_SESSION['id'] = $id;
    // HTML VENDEUR
    header ("refresh:0;url=index.php");
}
?>
