<?php

session_start();
//La connexion va donner le bon ID 
$_SESSION['id'] = 5;


include("/BuildMaster/Modele/connectBDD.php");
include("View/Template/templateTop.html");


// include ('tmp.php');
include ('Modele/select.php');

$donnees = selectMembre($bdd);

echo '<h1>Ecrire un message à : ';
	include ('View/Vendeur/message.php');
echo "Aller dans la conversation de : ";
/*
$moi = $_SESSION['id'];			
$toi = null;

$reponse = $bdd ->query('SELECT DISTINCT Destinataire, Expediteur FROM messagerie');
while ($donnees = $reponse->fetch()) {
	if ($donnees['Destinataire'] != "1") {
		if ($donnees['Expediteur'] == $moi) {
			$toi = $donnees['Destinataire'];
		} elseif ($donnees['Destinataire'] == $moi) {
			$toi = $donnees['Expediteur'];
		}

		if (is_null($toi)) {
		echo " ";	

		} else {
			$identifiant = $bdd ->query('SELECT * FROM membre');
			while ($tmp = $identifiant->fetch()) {
				if ($tmp['idMembre'] == $toi) {
					if ($tmp['statut'] == 'v') {
								$prenom = $tmp['nomSite'];
							} else {
								$prenom = $tmp['prenom'];
							}?>
					<p>
						<form action="message.php" method="POST">
						<label><?php echo $prenom; ?></label>
						<?php echo '<input type="hidden" name="destinataire" value="' . $tmp['idMembre'] . '">';?>
						<input type="hidden" name="page" value="message.php">
						<input type="submit" value="Go" style="background-color: Pink"></form></p>
						<?php
				}
			}	
	
		}
	}
}

if (is_null($toi)) {
	echo "Pas de conversation";	

	}
?> **/
