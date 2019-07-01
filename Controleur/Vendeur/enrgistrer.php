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
$advertissement = "Vous avez des nombreux signalements, cela veut dire que les utilisateurs sont mécontents de vous, faite attention à votre comportement s'il vous plait";	
$advertissement2 = "Les utilisateurs vous ont signalé à nouveau, si cela se repète, l'administrateur vous supprimera du site";	
$advertissement3 = "Malgré nos avertissements vos signalements ont augmenté, votre compte ainsi que vos articles et messages seront supprimés dans les plus brefs délais";		

if ($somme == 4) {
    $enregistrer = insertMessage($advertissement, 2, $compte); 
}   elseif ($somme == 5) {
    $enregistrer = insertMessage($advertissement2, 2, $compte); 
} elseif ($somme == 6) {
    $enregistrer = insertMessage($advertissement3, 2, $compte); 
} 

if ($somme == 6) {	
    $raison = "6 Signalements atteint, compte à supprimer = " . $_GET['compte'];
    $add = insertMessage($raison, 2, 1);
}

$selectidMembre = selectIdMembre();
while ($donnees2 = $selectidMembre->fetch()) {
    $statut = $donnees2["statut"]; 
    $idMembre = $donnees2["idMembre"];
}

if(isset($statut)){

    if($statut == "v"){
        include('View/Template/templateTop.html');
    }elseif ($statut == "c") {
        include("View/Template/templateTopAllClient.php");
    } else {
        include("View/Template/templateTopAdmin.html");
    }
}
include('View/Vendeur/okSignalment.php');
?>
