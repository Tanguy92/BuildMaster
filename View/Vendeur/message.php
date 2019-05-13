<!DOCTYPE html>
<html>

<head>
	<title>Accueil</title>
</head>

<body><center>
<p>
	<form action="message.php" method="POST">
			<select id="MenuDeroulant" name="destinataire">
				<option></option>
				<?php			
					for($i = 0; $i < count($donnees);$i++){	
						if ($donnees[$i]['idMembre'] != "1") {
							if ($donnees['statut'] == 'v') {
								echo '<option value="' . $donnees[$i]['idMembre'] . '">' . $donnees[$i]['magasin'] . '</option>';
							} else {
								echo '<option value="' . $donnees[$i]['idMembre'] . '">' . $donnees[$i]['prenom'] . " " . $donnees[$i]['nom'] . '</option>';
							}
						}
					}	 	
				?>
			</select>
			<input type="hidden" name="page" value="message.php">
		<input type="submit" value="Go" style="background-color: Pink">

	</form>
</p>




</center></body>
</html>