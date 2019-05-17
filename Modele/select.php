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

// Amine Annia

 
function selectMembre($bdd) {
	$reponse = $bdd ->prepare('SELECT * FROM membre');
	$reponse -> execute(null);

	while ($donnees[] = $reponse->fetch()) {

	}
	return $donnees;
}

// Requete Ihsane
// Sélectionne un thème selon l'ID choisi
function selectAllTheme(){
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM theme");
    return $reponse;
}
/*function selectTheme($id){
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM theme WHERE idTheme = $id");
    return $reponse;
}*/

?>