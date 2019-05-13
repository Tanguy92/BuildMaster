<?php
$moi = $_SESSION['id'];			
$toi = null;
    include('Modele/connectBDD.php');
    include('View/Template/templateTop.html');
    include('Modele/select.php');

if($moi != "1") {
    //Menu deroulant avec les membre dispo pour parler
    $donnees = selectMembre($bdd);
    include ('View/Vendeur/message.php');

//Boutons avec les noms des gens qui ont des conversations en cours
$message = selectMessage($bdd);
include ('View/Vendeur/chat.php');

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
