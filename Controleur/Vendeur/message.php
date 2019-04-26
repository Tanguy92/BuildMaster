<?php
session_start();
include ('tmp.php');
if (isset($_POST['destinataire'])) {
	$_SESSION['toi'] = $_POST['destinataire'];
}

if ($_POST['destinataire'] != "2") {
?>

<!DOCTYPE html>
<html>
	<head>
		<title>MiniChat</title>
	</head>
	<body>

		<?php
			
			
			$toi = $_SESSION['toi'];
			$moi = $_SESSION['id'];			

			$identifiant = $bdd ->query('SELECT * FROM membre');
				while ($tmp = $identifiant->fetch()) {
					if ($tmp['idMembre'] == $moi) {
						if ($tmp['statut'] == 'v') {
								$prenom1 = $tmp['nomSite'];
						} elseif ($tmp['statut'] == 'a') {
							$prenom1 = $tmp['nom'];
						} else {
							$prenom1 = $tmp['prenom'];
						}
					} elseif ($tmp['idMembre'] == $toi) {
						if ($tmp['statut'] == 'v') {
								$prenom2 = $tmp['nomSite'];
							} else {
								$prenom2 = $tmp['prenom'];
							}
					}
				}	
			

			$reponse = $bdd ->query('SELECT * FROM messagerie');
			while ($donnees = $reponse->fetch()) {
		
					if ($donnees['Expediteur'] == $moi AND $donnees['Destinataire'] == $toi) {
						echo  $prenom1 . " - " . $donnees['text'] . "</br>";
					} elseif ($donnees['Destinataire'] == $moi AND $donnees['Expediteur'] == $toi) {
						echo $prenom2 . " - " . $donnees['text'] . "</br>";
					}
			}
						?>

						<form action="ajouterMessage.php" method="POST">
							<p>
							<label>Message :</label>
							<input type="text_area" name="message" value="">
							</p>
							<input type="hidden" name="page" value="ajouterMessage.php">
							<input type="submit" value="Envoyer">
						</form>
						<?php 

			
			$identifiant->closeCursor();
} else {
	$reponse = $bdd ->prepare('SELECT * FROM messagerie WHERE Expediteur = 2 and Destinataire = :chose');
	$reponse->execute(array('chose' => $_SESSION['id']));
	$donnees = $reponse->fetch();
		?><h1><font color="red">AVERTISSEMENT!</font></h1>
					<?php  echo $donnees['text'];?>
					<h2>Cordialement, l'équipe BuildMaster</h2><?php
				}
?>
	</body>
</html>