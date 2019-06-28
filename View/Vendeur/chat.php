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
	$j=0;
	while ($j<$top) {
		if ($liste[$j] == $toi) {
			$present = true;		
		}
		$j++;
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
					$statut = 'VENDEUR';
					$photo = './View/Images/base.JPG';
					$id = $donnees[$i]['idMembre'];
				} else {
					$prenom = $donnees[$i]['prenom'];
					$statut = 'CLIENT';
					$photo = './View/Images/base.JPG';
					$îd = $donnees[$i]['idMembre'];
				}
				include ('View/Vendeur/message2.php');
			}
		}
	}
}

?>