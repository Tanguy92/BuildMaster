<?php
include("Modele/connectBDD.php");

function insertArticle($s1,$s2,$s4,$s5){
    $bdd = $GLOBALS["bdd"];

    $query =
    "INSERT INTO article (nom, prix, idCategorie, photo, dispo) VALUES(:set1, :set2, :set4, :set5,'oui')";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1,
                        ":set2" => $s2,
                        ":set4" => $s4,
                        ":set5" => $s5));
        $check = true;
       
    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}

function insertAppartenance($s1,$s2){
    $bdd = $GLOBALS["bdd"];

    $query =
    "INSERT INTO appartenance (idMembre, idProduit) VALUES(:set1, :set2)";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1,
                                  ":set2" => $s2,));
        $check = true;
       
    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }
}

//Req Annia
function insertMessage($c,$m,$t) {
    $bdd = $GLOBALS["bdd"];
    $requete = $bdd -> prepare("INSERT INTO `messagerie` (`idMessagerie`, `text`, `destinataire`, `expediteur`) VALUES (NULL, :corps, :toi, :moi);");
    $requete -> execute(array(":corps" => $c, ":moi" => $m, ":toi" => $t));
}

function updateSignal($som,$com) {
    $bdd = $GLOBALS["bdd"];
    $s = $bdd -> prepare("UPDATE `membre` SET `signalements` = :nb WHERE `membre`.`idMembre` = :identifiant;");
    $s -> execute(array('nb' => $som, 'identifiant' => $com));



    return $check;
}

// Fonction Tanguy
function createMembre()
{
    $toto= 0;
    $bdd = $GLOBALS["bdd"];

    $reponse = $bdd->prepare("INSERT INTO `membre` (`nom`, `prenom`, `mail`, `mdp`, `adresse`, `statut`, `magasin`, `signalements`, `idTheme`)
    VALUES (:nom,:prenom,:mail,:pass,:adresse,:grade,:magasin,'0',:theme);");
    $reponse->execute(array(
        'nom' => $_SESSION['nom'],
        'prenom' => $_SESSION["prenom"],
        'mail' => $_SESSION["mail"],
        'pass' => $_SESSION["pass"],
        'adresse' => $_SESSION["adresse"],
        'grade' => $_SESSION["grade"],
        'magasin' => $_SESSION["magasin"],
        'theme' => $_SESSION["theme"]
    ));
    
}

function updatePc($path) 
{

    $bdd = $GLOBALS["bdd"];

    $reponse = $bdd->prepare("UPDATE `membre` SET `photo` = (:photo) WHERE `membre`.`mail` = (:mail);");

    $reponse->execute(array(
        'photo' => $path,
        'mail' => $_SESSION["mail"]
    ));
}
?>