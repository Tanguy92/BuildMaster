<?php
include('View/Template/templateTop.html');

include('Modele/select.php');
if (isset($_GET['destinataire'])) {
	$_SESSION['toi'] = $_GET['destinataire'];
}

if ($_SESSION['toi'] != "2") {
    $toi = $_SESSION['toi'];
	$moi = $_SESSION['id'];			

    $donnees = selectMembre($bdd);

    //Mettre dans view a part???
	for ($i = 0; $i < count($donnees); $i++) {
		if ($donnees[$i]['idMembre'] == $moi) {
			if ($donnees[$i]['statut'] == 'v') {
				$prenom1 = $donnees[$i]['magasin'];
			} elseif ($donnees[$i]['statut'] == 'a') {
				$prenom1 = $donnees[$i]['nom'];
			} else {
				$prenom1 = $donnees[$i]['prenom'];
			}
		} elseif ($donnees[$i]['idMembre'] == $toi) {
			if ($donnees[$i]['statut'] == 'v') {
				$prenom2 = $donnees[$i]['magasin'];
			} else {
				$prenom2 = $donnees[$i]['prenom'];
			}
		}
	}	
			

    $message = selectMessage($bdd);
  
    for ($i = 0; $i < count($message); $i++) {
        include ('View/Vendeur/texte.php');
	}
    include ('View/Vendeur/sendMessage.php');

} else {
    $adv = selectAdv($_SESSION['id']);
  
    for ($i = 0; $i < count($adv)-1; $i++) {
        include ('View/Vendeur/attention.php');
    }
}
?>