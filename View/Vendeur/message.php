<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
	<title>Accueil</title>
</head>

<body><center>
<div id="container">
	<aside>
		<ul>
			
			<?php 
			for ($i = 0; $i < count($donnees)-1;$i++){
				if ($donnees[$i]['idMembre'] != "1" AND $donnees[$i]['idMembre'] != "2" AND $donnees[$i]['idMembre'] != $_SESSION['id'] ) {
				echo '<li>';
				echo '<form action="index.php" method="GET">';	
				echo '<img src="' . $donnees[$i]['photo'] . '" alt="">';

				if ($donnees[$i]['statut'] == 'v') {
					echo '<div><h2><input type="submit" value="' . $donnees[$i]['magasin'] . '"></h2>';
					echo '<h3>VENDEUR</h3>';
				} else {
					echo '<div><h2><input type="submit" value="' . $donnees[$i]['prenom'] . " " . $donnees[$i]['nom'] . '"></h2>';
					echo '<h3>CLIENT</h3>';
				} ?>
			<input type="hidden" name="page" value="conversation">
			<?php echo '<input type="hidden" name="destinataire" value="' . $_SESSION['toi'] . '">'; ?>
			</form>
			</div>
			</li>
			<?php }
				 } ?>
		</ul>
	</aside>
	

