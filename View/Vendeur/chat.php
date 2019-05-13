<?php
$liste = array();

for ($i = 0; $i < count($message)-1; $i++) {
	$destinataire = $message[$i]['destinataire'];
	$expediteur = $message[$i]['expediteur'];

	if ($expediteur == $moi) {
		$toi = $destinataire;
	} elseif ($destinataire == $moi) {
		$toi = $expediteur;
	}

	$top = count($liste);
	$present = false;
	for ($j=0; $j < $top; $j++) { 
		if ($liste[$j] == $toi) {
			$present = true;		
		}
	}

	if ($present == true) {
		$toi = null;
	} else {
		array_push($liste, $toi);
	}


	if (!is_null($toi)) {		
		$donnees = selectMembre($bdd);
		for ($i = 0; $i < count($donnees); $i++) {
			if ($donnees[$i]['idMembre'] == $toi) {
				if ($donnees[$i]['statut'] == 'v') {
					$prenom = $donnees[$i]['magasin'];
				} else {
					$prenom = $donnees[$i]['prenom'];
				}
				include ('View/Vendeur/message2.php');
			}
		}
	}
}
?>