<?php
include("Modele/connectBDD.php");

//Article
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

function selectAllArticle()
{
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM article");
    return $reponse;
}

function selectArticlePanier($s1)
{
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT article.idProduit,article.nom,article.prix,article.photo,article.dateDebut,article.dateFin,article.idCategorie,commande.idMembre FROM article JOIN commande ON article.idProduit = commande.idProduit WHERE idMembre = $s1 AND panier LIKE 'true'");
    return $reponse;
}

function selectDispo()
{
    $bdd = $GLOBALS["bdd"];
    $idProduit = $_POST["commander"];
    $reponse = $bdd->query("SELECT dateDebut,dateFin FROM commande WHERE idProduit = $idProduit AND etat NOT LIKE 'ferme'");
    return $reponse;
}

function selectIdMembre(){
    $bdd =$GLOBALS["bdd"];
    $mail ="";
    if(isset($_SESSION["mail"])){
        $mail = $_SESSION["mail"];
    }
    $reponse = $bdd->query("SELECT * FROM membre WHERE mail LIKE '$mail'");
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


function selectCommandeOuverte($s1)
{
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT commande.prix,commande.dateFin,commande.dateDebut,article.nom,article.photo FROM commande JOIN article ON commande.idProduit = article.idProduit WHERE etat LIKE 'ouverte' AND idMembre = $s1");
    return $reponse;
}

function selectCommandeFerme($s1)
{
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT commande.prix,commande.dateFin,commande.dateDebut,article.nom,article.photo  FROM commande JOIN article ON commande.idProduit = article.idProduit WHERE etat LIKE 'ferme' AND idMembre = $s1");
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

function selectSpecMembre($to) {
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare('SELECT * FROM membre WHERE idMembre = :t');
    $reponse->execute(array('t' => $to));
    $rep = $reponse->fetch();    
    return $rep;
}

function selectMessage($bdd) {
	$premier = $bdd ->prepare('SELECT DISTINCT * FROM messagerie');
	$premier -> execute(null);

	while ($message[] = $premier->fetch()) {}
	return $message;
}

function selectMessageSup($coco) {
    $bdd = $GLOBALS["bdd"];
	$premier = $bdd ->prepare('SELECT messagerie.idMessagerie FROM `messagerie` WHERE messagerie.expediteur = :ca OR messagerie.destinataire = :ca;');
	$premier -> execute(array('ca' => $coco));

	while ($message[] = $premier->fetch()) {}
	return $message;
}

function selectNote($coco) {
    $bdd = $GLOBALS["bdd"];
	$premier = $bdd ->prepare('SELECT AVG(note) FROM notes WHERE idMembre = :ca');
	$premier -> execute(array('ca' => $coco));

	while ($noter[] = $premier->fetch()) {}
    return $noter;
}

function selectNotes() {
    $bdd = $GLOBALS["bdd"];
	$premier = $bdd ->query('SELECT * FROM notes');

	while ($noter[] = $premier->fetch()) {}
    return $noter;
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

function selectVendeurProduit($idProduit) {
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare('SELECT * FROM appartenance WHERE idProduit = :t');
    $reponse->execute(array('t' => $idProduit));
    $rep = $reponse->fetch();    
    return $rep;
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

    $prenom ="";
    
    while ($donnees2 = $reponse2->fetch()) {
        $_SESSION['prenom'] = $donnees2['prenom'];
    }

    if (isset($_SESSION['prenom'])) {
        return  $_SESSION['prenom'];
    }

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
    $reponse = $bdd->query("SELECT * from membre where membre.statut LIKE 'v';");
    return $reponse;
}
function search($search)
{

    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT *,count(*) FROM `article` WHERE `nom` LIKE :search");
    $reponse->execute(array(
        'search' => $search
    ));
    return $reponse;
}
function search2($search)
{

    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT *,count(*) FROM `membre` WHERE `magasin` LIKE :search");
    $reponse->execute(array(
        'search' => $search
    ));
    return $reponse;
}
   
function search3($search)
{

    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT * FROM `article` WHERE `idCategorie` LIKE :search");
    $reponse->execute(array(
        'search' => $search
    ));
    return $reponse;
}

function description($idProduit){
    
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT article.prix AS prix,article.idProduit AS idProduit,article.nom AS nom,`description` AS `description`,article.photo AS photo, adresse FROM `article` JOIN appartenance ON article.idProduit LIKE appartenance.idProduit JOIN membre ON appartenance.idMembre LIKE membre.idMembre WHERE article.idProduit LIKE :idProduit ");
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
   

//Select toutes les categories.
function selectAllCategorie(){
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->query("SELECT * FROM categorie");
    return $reponse;
}


function couleurCss($idTheme){
    
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT couleur from theme JOIN membre on theme.idTheme like membre.idTheme WHERE membre.idTheme = :theme;");
    $reponse->execute(array(
        'theme' => $idTheme
    ));
   
    return $reponse;
}
function articleMagasin($idMagasin)
    {
        $bdd = $GLOBALS["bdd"];
        $reponse = $bdd->prepare("SELECT article.nom,article.idProduit,article.photo,prix FROM article JOIN appartenance ON article.idProduit = appartenance.idProduit JOIN membre ON appartenance.idMembre = membre.idMembre  WHERE  membre.idMembre LIKE :magasin ");
        $reponse->execute(array(
            'magasin' => $idMagasin
        ));

        return $reponse;
    }
function radioTheme()
    {
        $bdd = $GLOBALS["bdd"];
        $reponse = $bdd->query("SELECT * FROM theme");
        return $reponse;
    }
function idTheme($mail)
    {
        $bdd = $GLOBALS["bdd"];
        $reponse = $bdd->prepare("SELECT couleur from theme JOIN membre on theme.idTheme like membre.idTheme WHERE membre.mail =:mail ;");
        $reponse->execute(array(
            ':mail' => $mail
        ));
       
        return $reponse;
    }
    function idTheme2($color)
    {
        $bdd = $GLOBALS["bdd"];
        $reponse = $bdd->prepare("SELECT idTheme FROM theme WHERE nom like :color");
        $reponse->execute(array(
            ':color' => $color
        ));
        return $reponse;
    }
    function check($mail)
    {
        $bdd = $GLOBALS["bdd"];
        $reponse = $bdd->prepare("SELECT count(*) FROM membre WHERE mail like :mail");
        $reponse->execute(array(
            ':mail' => $mail
        ));
        return $reponse;
    }

  

?>