
<?php
$reponse = $bdd->prepare("SELECT `mdp` FROM `membre` WHERE `mail` LIKE :mail");
$reponse->execute(array(
    'mail' => $_SESSION['mail']
));


while ($donnees = $reponse->fetch()) {
   $mdp = $donnees['mdp'] ;
}
?>