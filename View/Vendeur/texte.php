<!DOCTYPE html>
<html>
    <head>
        <title>Accueil</title>
        <link rel="stylesheet" type="text/css" href="View/Css/message.css"/>
    </head>

    <body><center>
       
        <p>
            <?php
            if ($message[$i]['expediteur'] == $moi AND $message[$i]['destinataire'] == $toi) {
                echo  '<div id="one">' . $message[$i]['text'] . "</div>";
            } elseif ($message[$i]['destinataire'] == $moi AND $message[$i]['expediteur'] == $toi) {
                echo '<div id="two">' . $message[$i]['text'] . "</div>";
            }
            ?>
       </p>
    </center></body>
 
    </html>
