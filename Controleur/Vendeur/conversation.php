<?php
include('Modele/select.php');
$moi = $_SESSION['id'];			
$toi = null;
include('Modele/connectBDD.php');
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

	if (isset($_GET['destinataire'])) {
		$_SESSION['toi'] = $_GET['destinataire'];
	}

	if ($_SESSION['toi'] != "2") { 

		$toi = $_SESSION['toi'];
		$moi = $_SESSION['id'];			

		$donnees = selectMembre($bdd);

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
					$photo = $donnees[$i]['photo'];
				} else {
					$prenom2 = $donnees[$i]['prenom'];
					$photo = $donnees[$i]['photo'];
				}
			}
		}	
				

		$message = selectMessage($bdd);
		include ('View/Vendeur/texte1.php');
		for ($i = 0; $i < count($message); $i++) {
			include ('View/Vendeur/texte.php');
		}
		include ('View/Vendeur/sendMessage.php');

	} else {
		$adv = selectAdv($_SESSION['id']);
		include ('View/Vendeur/attention0.php');
		for ($i = 0; $i < count($adv)-1; $i++) {
			include ('View/Vendeur/attention.php');
		}
		include ('View/Vendeur/attention1.php');
	}
}
?>