<?php
$moi = $_SESSION['id'];			
$toi = null;
    include('Modele/connectBDD.php');
    include('Modele/select.php');
    $idMembre = selectSpecMembre($moi);
        $statut = $idMembre["statut"];

    if($statut == "v"){
        include('View/Template/templateTopMessage.html');
    }elseif ($statut == "c") {
        include("View/Template/templateTopAllClientMessage.php");
    } else {
        include("View/Template/templateTopAdminMessage.html");
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
//Debut de la table
include ('View/Vendeur/a.php');


    $adv = selectAdv($_SESSION['id']);
    for ($i = 0; $i < count($adv)-1; $i++) {
        $pu = $adv[$i]['idMessagerie'];
        $mot = $adv[$i]['text']; 
        $top = strlen($mot)-1;
        $sup = $mot[$top-1] . $mot[$top];
        include ('View/Vendeur/adminSysteme.php');
    }
    include ('View/Vendeur/as1.php');
 }
?>