<?php
$reponse3 = $bdd->prepare("SELECT `statut` FROM `Membre` WHERE `mail` LIKE :mail");
$reponse3->execute(array(
    'mail' => $_SESSION['mail']
));


while ($donnees3 = $reponse3->fetch()) {
   $grade = $donnees3['statut'] ;
}

?>