<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
	<title>Accueil</title>
</head>

<body><center>
<p>
	<form action="index.php" method="GET">
	<h1>Parler avec : </h1>
			<select id="menuDeroulant" name="destinataire" onchange="this.form.submit()">
				<option></option>
				<?php			
					for($i = 0; $i < count($donnees)-1;$i++){	
						if ($donnees[$i]['idMembre'] != "1" AND $donnees[$i]['idMembre'] != "2" AND $donnees[$i]['idMembre'] != $_SESSION['id'] ) {
							if ($donnees[$i]['statut'] == 'v') {
								echo '<option value="' . $donnees[$i]['idMembre'] . '">' . $donnees[$i]['magasin'] . '</option>';
							}	else {
								echo '<option value="' . $donnees[$i]['idMembre'] . '">' . $donnees[$i]['prenom'] . " " . $donnees[$i]['nom'] . '</option>';
							}
						}
					}	 	
				?>
			</select>
		
		<input type="hidden" name="page" value="conversation">
	</form>
</p>
<h1>Conversations en cours </h1>

</center></body>
</html>

