<?php
include("View/Template/templateTop.html");
include("Modele/select.php");
include("View/Vendeur/ajouterArticle.php");

?>


<?php

if (isset($_POST["ajoutArticle"])) {
    include("Modele/insert.php");

    if(!empty($_POST['prixArticle'])){
        $prix = $_POST['prixArticle'];
        $quantite = $_POST['nombreArticle'];
        $nom = $_POST['nomArticle'];
        $categorie = $_POST['categorieArticle'];

    }
    if(insertArticle($nom,$prix,$quantite,$categorie)){
        header("refresh:1;url=index.php?page=articleVendeur");
    }
   
}




?>