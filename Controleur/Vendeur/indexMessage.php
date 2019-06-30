<?php
$moi = $_SESSION['id'];			
$toi = null;
    include('Modele/connectBDD.php');
    include('Modele/select.php');
    $idMembre = selectIdMembre();
    while ($donnees2 = $idMembre -> fetch()) {
        $statut = $donnees2["statut"];
    }

    if($statut == "v"){
        include('View/Template/templateTop.html');
    }elseif ($statut == "c") {
        include("View/Template/templateTopAllClient.php");
    } else {
        include("View/Template/templateTopAdmin.html");
    }

if($moi != "1") {
    //Debut de la table
    include ('View/Vendeur/message4.php');

//Boutons avec les noms des gens qui ont des conversations en cours
$message = selectMessage($bdd);
include ('View/Vendeur/chat.php');

//Corps des messages
include ('View/Vendeur/message3.php');

} else {
    $adv = selectAdv($_SESSION['id']);
  
    for ($i = 0; $i < count($adv)-1; $i++) {
        $pu = $adv[$i]['idMessagerie'];
        $mot = $adv[$i]['text']; 
        $top = strlen($mot)-1;
        $sup = $mot[$top];
        include ('View/Vendeur/adminSysteme.php');
    }
}
?>
