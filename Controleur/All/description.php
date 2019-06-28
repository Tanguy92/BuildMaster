<?php
// include("Modele/connectBDD.php");
include("Modele/select.php");
include("Modele/insert.php");

$selectidMembre = selectIdMembre();
while ($donnees2 = $selectidMembre->fetch()) {
    $statut = $donnees2["statut"];
    $idMembre = $donnees2["idMembre"];
}

if(isset($statut)){

    if($statut == "v"){
        include('View/Template/templateTop.html');
    }elseif ($statut == "c") {
        include("View/Template/templateTopAllClient.php");
    }
} else {
   include("View/Template/templateTopAll.html");
}

if(isset($_POST["idProduit"])){
    $idProduit=$_POST["idProduit"];

    //Determination de l'id du vendeur pour le contacter
    $rep = selectVendeurProduit($idProduit);
    $vendeur = $rep['idMembre'];
    
    $reponse = description($idProduit);
    while ($donnees = $reponse->fetch()) {  
        include("View/Template/templateMidDescription.php");
    }
}

 if (isset($_POST["ajoutPanier"])) {
   $idProduit = $_POST["ajoutPanier"];
   $prix = $_POST["prix"];
   $echec = false;

   if(isset($idMembre)){
  
  
        $reponse2 = selectArticlePanier($idMembre);
        while ($donnees3 = $reponse2->fetch()) {
            if ($donnees3["idProduit"] == $idProduit && $donnees3["idMembre"] == $idMembre) {
                $echec = true;
            }
        } 
        
        if($echec != true){
            insertCommande($idProduit,$idMembre,$prix);
            header('Location: index.php?page=acceuilClient');
        } else {
            echo "Cet article est déjà dans votre panier.";
            header('Location: index.php?page=acceuilClient');
        }
    } else {
    header('Location: index.php?page=connexion');
}
}





?>