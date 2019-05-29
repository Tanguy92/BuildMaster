<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
<title>Accueil</title>
	</head>
	<body><center>
			<h1><font color="white">Changez les données personnelles que vous souhaitez</font></h1>
<p>
<form action="index.php" method="GET">
    <p>
    <h3><font color="red">Pour validez vos changements merci de donner votre mot de passe actuel,</br> 
            il sera verifiez avant de changer vos infos : </h3>
        <input id="zoneText2" type="text" name="motOld" value=""></br>
</p><p>
        <h3><font color="white">Votre mail actuel est : <?php echo $s['mail']; ?> </font></h3>
        <label><font color="cyan">Choisisez votre nouveau mail, mettez seulement votre identifiant</font></label></br>
        <h7><font color="cyan">exemple: 'admin'</font></h7></br>
        <input id="zoneText2" type="text" name="mail" value=""></br>

        <select id="menuDeroulant" name="domaine">

            <option value="@gmail.com">@gmail.com</option>
            <option value="@intechinfo.fr">@intechinfo.fr</option>
            <option value="@free.fr">@free.fr</option>
            <option value="@orange.fr">@orange.fr</option>
            <option value="@yahoo.fr">@yahoo.fr</option>
            <option value="@laposte.net">@laposte.net</option>
            <option value="@sfr.com">@sfr.com</option>

        </select></br>
        
    </p>
    <p></br></br>
        <label><font color="cyan">Choisisez votre nouveau mot de passe</font></label></br>
        <input id="zoneText2" type="text" name="mot" value=""></br>
        <label><font color="cyan">Confirmez le mot de passe</font></label></br>
        <input id="zoneText2" type="text" name="mot2" value="">
    </p>
    <p>
        <h3><font color="white">Votre adresse actuel est : <?php echo $s['adresse']; ?> </font></h3>
        <label><font color="cyan">Choisisez votre nouvelle adresse</font></label></br>
        <input id="zoneText2" type="text" name="adresse" value="">
    </p>
    <?php

    if ($s['statut'] == 'v') {
        ?>
        <p>
            <h3><font color="white">Votre magasin s'appelle : <?php echo $s['magasin']; ?></font> </h3>
            <label><font color="cyan">Choisisez votre nouveau nom</font></label></br>
            <input id="zoneText2" type="text" name="magasin" value="">
        </p>
        <?php
    } ?>

    <p>
        <input type="hidden" name="page" value="change2">
        <input id="bouton" type="submit" value="Soumettre">
	</form>
    </p>
            </center></body>
</html>