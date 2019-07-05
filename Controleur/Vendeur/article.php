<?php
include("View/Template/templateTop.html");
include("Modele/select.php");
include("Modele/delete.php");

?>

<?php

$reponse = selectArticle();


 


if (isset($_POST["supprimer"])) {
    deleteArticleAppartenance($_POST["supprimer"]);
    deleteArticlePanier($_POST["supprimer"]);
    deleteArticle($_POST["supprimer"]);
    header("Location: index.php?page=articleVendeur");
}
include("View/Template/templateMidArticle.php");

?>


