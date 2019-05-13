<?php

$reponse2 = $bdd->prepare("SELECT `prenom` FROM `membre` WHERE `mail` LIKE :mail");
$reponse2->execute(array(
    'mail' => $_SESSION['mail']
));


while ($donnees2 = $reponse2->fetch()) {
   $_SESSION['prenom'] = $donnees2['prenom'] ;
}

?>