<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
        <title>Accueil</title>
    </head>

    <body><center>
        <p id='sys'>
            <table>
			    <tr id="ligne">
				    <th>Message Systeme</th>
				    <th>Action</th>
			    </tr>
		        <tr>
			        <td id="col"><h3><font color="white"><?php echo $adv[$i]['text']; ?></font><h3></td>
			        <td id ="col">
                        <form action="index.php" method="GET">
                            <input type="hidden" name="page" value="supSign">
                            <input type="hidden" name="profil" value="<?php echo $sup; ?>">
                            <input type="hidden" name="id" value="<?php echo $pu;  ?>">
		                    <input id="conversation" type="submit" value="Supprimer">
                        </form>
                    </td>
		        </tr>	
            </table>
        </p>
    </center></body>
</html>