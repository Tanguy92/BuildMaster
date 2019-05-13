<?php
$compte = $_GET['compte'];
	
include('Modele/select.php');
include('Modele/insert.php');

$donnees = selectMembre($bdd);
for($i = 0; $i < count($donnees)-1;$i++){	
    if ($donnees[$i]['idMembre'] == $compte) {
        $somme = $donnees[$i]['signalements'] +1;
        $enregistrer = updateSignal($somme, $compte);   
        break;     
	}
}	

//Faire un avertissement si la somme = 4 Dela part du systeme idMembre 2
$advertissement = "Vous avez des nombreux signalements, si vous recevez ce message 3 fois votre compte sera supprime";		
if ($somme >= 4 AND $somme < 6) {
    $enregistrer = insertMessage($advertissement, 2, $compte); 
}

if ($somme == 6) {	
    $raison = "6 Signalements atteint, compte à supprimer = " . $_GET['compte'];
    $add = insertMessage($raison, 2, 1);
}



include('View/Template/templateTop.html');
include('View/Vendeur/okSignalment.php');
?>
