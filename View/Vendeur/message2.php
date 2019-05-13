<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
	<title>Accueil</title>
</head>

<body><center>
<p>
	<form action="index.php" method="GET">
		<?php echo '<input type="hidden" name="destinataire" value="' . $donnees[$i]['idMembre'] . '">';?>
		<input type="hidden" name="page" value="conversation">
		<input id="conversation" type="submit" value="<?php echo $prenom; ?>">
	</form>
</p>

</center></body>
</html>