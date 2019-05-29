<!DOCTYPE html>
<html>
	<head>
	    <link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
        <title>Accueil</title>
	</head>
	<body><center>
        <h1><font color="red">Etes vous sure de vouloir supprimer votre compte?</font></h1>
        <h3><font color="black">L'action supprimera aussi vos articles, commandes et messages</font></h3>
        <p>
	        <form action="index.php" method="GET">
                <p>
                    <h3><font color="red">Pour validez vos changements merci de donner votre mot de passe actuel,</br> 
                il sera verifiez avant de changer vos infos : </h3>
                    <input id="zoneText2" type="text" name="motOld" value=""></br>
                </p>
                <input type="hidden" name="page" value="prep">
		        <input id="bouton" type="submit" value="Supprimer">
        	</form>
        </p>
    </center></body>
</html>