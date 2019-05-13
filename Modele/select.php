<?php
include("Modele/connectBDD.php");

// Requete Amine
function selectCategorie(){
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM categorie");
    return $reponse;
}

function selectArticle(){
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM article");
    return $reponse;
}

//Requete Annia
function selectMembre($bdd) {
	$rep = $bdd ->prepare('SELECT * FROM membre');
	$rep -> execute(null);

	while ($donnees[] = $rep->fetch()) {

	}
	return $donnees;
}

function selectMessage($bdd) {
	$premier = $bdd ->prepare('SELECT DISTINCT * FROM messagerie');
	$premier -> execute(null);

	while ($message[] = $premier->fetch()) {

	}
	return $message;
}

function selectAdv($o) {
    $bdd = $GLOBALS["bdd"];
	$a = $bdd ->prepare('SELECT * FROM messagerie WHERE expediteur = 2 and destinataire = :chose');
	$a -> execute(array('chose' => $o));

	while ($adv[] = $a->fetch()) {

	}
	return $adv;
}

// Requete Tanguy


?>