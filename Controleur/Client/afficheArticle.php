<?php
include("View/Template/templateTopAllClient.php");

include("Modele/select.php");
include("Modele/insert.php");

$reponse = selectAllArticle();

$selectidMembre = selectIdMembre();

while ($donnees = $selectidMembre->fetch()) {
    $idMembre = $donnees["idMembre"];
}

while ($donnees = $reponse->fetch()) {
    include("View/Client/afficheArticle.php");
}

if (isset($_POST["ajoutPanier"])) {
    $idProduit = $_POST["ajoutPanier"];
    $prix = $_POST["prix"];
    $echec = false;
   // updateDispoArticle();
   $reponse2 = selectArticlePanier($idMembre);
   while ($donnees2 = $reponse2->fetch()) {
       if ($donnees2["idProduit"] == $idProduit && $donnees2["idMembre"] == $idMembre) {
           $echec = true;
       }
   }   
   if($echec != true){
        insertCommande($idProduit,$idMembre,$prix);
        header('Location: index.php?page=afficheArticle');
   } else {
       echo "Cet article est déjà dans votre panier.";
   }
}


?>