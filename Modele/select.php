<?php
include("Modele/connectBDD.php");

// Requete Amine
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


// Amine Annia


function selectMembre($bdd)
{
    $reponse = $bdd->prepare('SELECT * FROM membre');
    $reponse->execute(null);

    while ($donnees[] = $reponse->fetch()) { }
    return $donnees;
}

// Requete Tanguy


/////// Trouve un Mot de passe  ////
function mdp()
{
    $bdd = $GLOBALS["bdd"];
    $reponse = $bdd->prepare("SELECT `mdp` FROM `membre` WHERE `mail` LIKE :mail");
    $reponse->execute(array(
        'mail' => $_SESSION['mail']
    ));


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


    while ($donnees3 = $reponse3->fetch()) {
        $grade = $donnees3['statut'];
    }
    return $grade;
}
?>