<?php
include("Modele/connectBDD.php");

//Req Amine
function insertArticle($s1,$s2,$s3,$s4){
    $bdd = $GLOBALS["bdd"];

    $query =
    "INSERT INTO Article (nom, prix,quantite, idCategorie, Dispo) VALUES(:set1, :set2, :set3,:set4,'oui')";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1,
                        ":set2" => $s2,
                        ":set3" => $s3,
                        ":set4" => $s4));
        $check = true;
       
    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
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
}
?>

