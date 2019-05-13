<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
<title>Accueil</title>
	</head>
	<body><center>
			<h1>Compte a signaler </h1>
<p>
	<form action="index.php" method="GET">
		<select id="menuDeroulant" name="compte">
			<option></option>
			<?php
                for($i = 0; $i < count($donnees)-1;$i++){	
                    if ($donnees[$i]['idMembre'] != "1" AND $donnees[$i]['idMembre'] != "2" AND $donnees[$i]['idMembre'] != $_SESSION['id'] ) {
                        if ($donnees[$i]['statut'] == 'v') {
                            echo '<option value="' . $donnees[$i]['idMembre'] . '">' . $donnees[$i]['magasin'] . '</option>';
                        } else {
                            echo '<option value="' . $donnees[$i]['idMembre'] . '">' . $donnees[$i]['prenom'] . " " . $donnees[$i]['nom'] . '</option>';
                        }
                    }
                }
			?>
		</select>
</p>
<p>
	<h1>Raison du signalement</h1></p>
	<p><input id="zoneText2" type="text" name="raison" value="">
		<input type="hidden" name="page" value="signaler2">
			</p><p>
		<input id="bouton" type="submit" value="Signaler">
	</form>
</p>
            </center></body>
</html>