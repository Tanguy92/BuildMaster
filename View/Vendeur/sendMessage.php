
<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
    </head>

    <body><center>
        <p>
            <form action="index.php" method="GET">
				<p>
					<input id="zoneText" type="text_area" name="message" value="">
			
				<input type="hidden" name="page" value="addMessage">
                <input type="submit" value="Envoyer à <?php echo $prenom2; ?>">
                </p>
            </form>
        </p>
    </center></body>
</html>