<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
<title>Accueil</title>
	</head>
	<body><center>
			<h1>Magasin a noter </h1>
<p>
	<form action="index.php" method="GET">
		<select id="menuDeroulant" name="vendeur">
			<option></option>
			<?php
                for($i = 0; $i < count($donnees)-1;$i++){	
                    if ($donnees[$i]['idMembre'] != "1" AND $donnees[$i]['idMembre'] != "2" AND $donnees[$i]['idMembre'] != $_SESSION['id'] ) {
                        if ($donnees[$i]['statut'] == 'v') {
                            echo '<option value="' . $donnees[$i]['idMembre'] . '">' . $donnees[$i]['magasin'] . '</option>';
                        }
                    }
                }
			?>
		</select>
    </p>
    <p>
        <h1>Votre note (sur 10) </h1></p>
        
        <select id="menuDeroulant" name="note">
            <option></option>
            <?php
                for($i = 0; $i < 11;$i++){	
                    echo '<option value="' . $i . '">' . $i . '</option>';
                }
            ?>
        </select>
        <input type="hidden" name="page" value="noter2">
    </p>
    <p>
        <input id="bouton" type="submit" value="Noter">
	</form>
    </p>
            </center></body>
</html>