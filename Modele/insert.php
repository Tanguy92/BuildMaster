<?php
include("Modele/connectBDD.php");

//AMINE
function insertArticle($s1,$s2,$s4,$s5,$s6,$s7,$s8){
    $bdd = $GLOBALS["bdd"];

    $query =
    "INSERT INTO article (nom, prix, idCategorie, photo, dateDebut, dateFin, `description`) VALUES(:set1, :set2, :set4, :set5,:set6,:set7,:set8)";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1,
                        ":set2" => $s2,
                        ":set4" => $s4,
                        ":set5" => $s5,
                        ":set6" => $s6,
                        ":set7" => $s7,
                        ":set8" => $s8));
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
                                  ":set2" => $s2
                                ));
        $check = true;
        }catch(PDOException $ex)
        {
            die("Fail : ".$ex);
        }
}

function insertCommande($s1,$s2,$s3){
        $bdd = $GLOBALS["bdd"];
    
        $query =
        "INSERT INTO commande (idProduit, idMembre, prix) VALUES(:set1, :set2, :set3)";
        try {
            $queries = $bdd -> prepare($query);
            $queries -> execute(array(":set1" => $s1,
                                      ":set2" => $s2,
                                      ":set3" => $s3
                                    ));
            $check = true;
            }catch(PDOException $ex)
            {
                die("Fail : ".$ex);
            }
}


/*function insertDispo($s1,$s2,$s3){
    $bdd = $GLOBALS["bdd"];

    $query =
    "INSERT INTO dispo (dateDebut,dateFin,idProduit) VALUES(:set1, :set2, :set3)";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1,
                                  ":set2" => $s2,
                                  ":set3" => $s3
                                ));
        $check = true;
        }catch(PDOException $ex)
        {
            die("Fail : ".$ex);
        }
}*/



function insertTheme($s2, $s3){
    $bdd = $GLOBALS["bdd"];

    $query =
    "INSERT INTO theme (nom, couleur) VALUES(:set2, :set3)";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set2" => $s2,
                        ":set3" => $s3
                    ));
        $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }
}

//ANNIA
//Inserer un nouveau message
function insertMessage($c,$m,$t) {
    $bdd = $GLOBALS["bdd"];
    $requete = $bdd -> prepare("INSERT INTO `messagerie` (`idMessagerie`, `text`, `destinataire`, `expediteur`) VALUES (NULL, :corps, :toi, :moi);");
    $requete -> execute(array(":corps" => $c, ":moi" => $m, ":toi" => $t));
}

//Actualiser le nb de signalements +1
function updateSignal($som,$com) {
    $bdd = $GLOBALS["bdd"];
    $s = $bdd -> prepare("UPDATE `membre` SET `signalements` = :nb WHERE `membre`.`idMembre` = :identifiant;");
    $s -> execute(array('nb' => $som, 'identifiant' => $com));
}

//Inserer une note
function insertNote($c,$m) {
    $bdd = $GLOBALS["bdd"];
    $requete = $bdd -> prepare("INSERT INTO `notes` (`idNotes`, `note`, `idMembre`) VALUES (NULL, :nb, :ven);");
    $requete -> execute(array(":nb" => $c, ":ven" => $m));
}

//Actualiser la note du vendeur
function updateNote($n, $personne) {
    $bdd = $GLOBALS["bdd"];
    $s = $bdd -> prepare("UPDATE `membre` SET `note` = :nb WHERE `membre`.`idMembre` = :identifiant;");
    $s -> execute(array('nb' => $n, 'identifiant' => $personne));
}

//IHSANE
/*function updateTheme(){
    $bdd = $GLOBALS["bdd"];
    $query =
    "UPDATE membre SET idTheme = (SELECT idTheme FROM theme WHERE couleur LIKE '#000000') WHERE idMembre = 1";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(
                    ));
        $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}*/



//TANGUY
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
        'pass' => md5($_SESSION["pass"]),
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

function updatePc2($path) 
{

    $bdd = $GLOBALS["bdd"];

    $reponse = $bdd->prepare("UPDATE `membre` SET `logo` = (:photo) WHERE `membre`.`mail` = (:mail);");

    $reponse->execute(array(
        'photo' => $path,
        'mail' => $_SESSION["mail"]
    ));
}

function insertCategorie($s1){
    $bdd = $GLOBALS["bdd"];

    $query =
    "INSERT INTO categorie (nom) VALUES (:set1)";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1
                    ));
        $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }
}

?>