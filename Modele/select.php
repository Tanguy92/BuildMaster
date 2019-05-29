<?php
include("Modele/connectBDD.php");

//AMINE
function selectCategorie()
{
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM categorie");
    return $reponse;
}

function selectArticle()
{
    $bdd = $GLOBALS["bdd"];
    $mail = $_SESSION["mail"];
    $reponse = $bdd->query("SELECT article.nom,article.idProduit,article.photo,prix FROM article JOIN appartenance ON article.idProduit = appartenance.idProduit JOIN membre ON appartenance.idMembre = membre.idMembre  WHERE  mail LIKE '$mail' ");
    return $reponse;
}

function selectIdMembre(){
    $bdd =$GLOBALS["bdd"];
    $mail = $_SESSION["mail"];
    $reponse = $bdd->query("SELECT idMembre FROM membre WHERE mail LIKE '$mail'");
    return $reponse;
}

function selectDernierArticle(){
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT MAX(idProduit) FROM article");
    return $reponse;
}

function selectModifierArticle(){
    $bdd = $GLOBALS["bdd"];
    if (isset($_POST["modifier"])) {
        $idArticle = $_POST["modifier"];
        $reponse = $bdd->query("SELECT *,article.nom,categorie.nom AS nomCate FROM article JOIN categorie ON article.idCategorie = categorie.idCategorie WHERE idProduit = $idArticle");
    }
 
    return $reponse;
}

//ANNIA
//Prendre tous les infos de la table 
function selectMembre($bdd) {
    $reponse = $bdd->prepare('SELECT * FROM membre');
    $reponse->execute(null);

    while ($donnees[] = $reponse->fetch()) {}
    return $donnees;
}

function selectMessage($bdd) {
	$premier = $bdd ->prepare('SELECT DISTINCT * FROM messagerie');
	$premier -> execute(null);

	while ($message[] = $premier->fetch()) {}
	return $message;
}

function selectAppartenance($bdd) {
	$appart = $bdd ->prepare('SELECT DISTINCT * FROM appartenance');
	$appart -> execute(null);

	while ($ap[] = $appart->fetch()) {}
	return $ap;
}

//Selectionner le message d'avertissement envoyé par le systeme (affichage diff)
function selectAdv($o) {
    $bdd = $GLOBALS["bdd"];
	$a = $bdd ->prepare('SELECT * FROM messagerie WHERE expediteur = 2 and destinataire = :chose');
	$a -> execute(array('chose' => $o));

	while ($adv[] = $a->fetch()) {}
	return $adv;
}

//Determination de l'id de la personne lors de la connexion
function detId(){
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT `idMembre` FROM `membre` WHERE `mail` LIKE :mail");
    $reponse->execute(array('mail' => $_SESSION['mail']));
    $id = "";

    while ($donnees = $reponse->fetch()) {
        $id = $donnees['idMembre'];
    }
    return $id;
}

//Selectionner que les clients / vendeurs
function selectC($bdd) {
    $client = $bdd->prepare('SELECT * FROM membre WHERE statut = "c"');
    $client->execute(null);

    while ($c[] = $client->fetch()) {}
    return $c;
}

function selectV($bdd) {
    $vendeur = $bdd->prepare('SELECT * FROM membre WHERE statut = "v"');
    $vendeur->execute(null);

    while ($v[] = $vendeur->fetch()) {}
    return $v;
}

//IHSANE
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
// Tanguy
/////// Trouve un Mot de passe  ////
function mdp()
{
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT `mdp` FROM `membre` WHERE `mail` LIKE :mail");
    $reponse->execute(array(
        'mail' => $_SESSION['mail']
    ));
    $mdp = "";

    while ($donnees = $reponse->fetch()) {
        $mdp = $donnees['mdp'];

    }
    return $mdp;
}
/////// Trouve un pseudo  ////
function prenom()
{
    $bdd = $GLOBALS["bdd"];
    $reponse2 = $bdd->prepare("SELECT `prenom` FROM `membre` WHERE `mail` LIKE :mail");
    $reponse2->execute(array(
        'mail' => $_SESSION['mail']
    ));

    $prenom = "";
    while ($donnees2 = $reponse2->fetch()) {
        $_SESSION['prenom'] = $donnees2['prenom'];
    }
    return  $_SESSION['prenom'];
}

/////// Trouve un statut  ////
function statut()
{
    $bdd = $GLOBALS["bdd"];
    $reponse3 = $bdd->prepare("SELECT `statut` FROM `membre` WHERE `mail` LIKE :mail");
    $reponse3->execute(array(
        'mail' => $_SESSION['mail']
    ));
    $grade = "";

    while ($donnees3 = $reponse3->fetch()) {
        $grade = $donnees3['statut'];
    }
    return $grade;
}
function selectAllArticleTanguy()
{
    $bdd = $GLOBALS["bdd"];
    $mail = $_SESSION["mail"];
    $reponse = $bdd->query("SELECT * FROM article ");
    return $reponse;
}
function Tanguy()
{

    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM article");
    return $reponse;
}
function TanguyMagasin()
{

    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * from membre where membre.magasin NOT LIKE 'NULL';");
    return $reponse;
}
function search($search)
{

    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT * FROM `article` WHERE `nom` LIKE :search");
    $reponse->execute(array(
        'search' => $search
    ));
    return $reponse;
}
   
function description($idProduit){
    
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT * FROM `article` WHERE `idProduit` LIKE :idProduit ");
    $reponse->execute(array(
        'idProduit' => $idProduit
    ));
   
    return $reponse;
}

function descriptionMagasin($idMagasin){
    
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT * FROM `membre` WHERE `idMembre` LIKE :idMembre ");
    $reponse->execute(array(
        'idMembre' => $idMagasin
    ));
   
    return $reponse;
}
?>