<?php
include("View/Template/templateTop.html");
include("Modele/select.php");
include("Modele/delete.php");

?>



<?php
echo '<a href="index.php?page=ajouterArticle">Ajouter un article</a>';

$reponse = selectArticle();

while ($donnees = $reponse->fetch()) {
    include("View/Vendeur/article.php");
}

if (isset($_POST["supprimer"])) {
    deleteArticle($_POST["supprimer"]);
    header("refresh:0;url=index.php?page=articleVendeur");
}

?>


