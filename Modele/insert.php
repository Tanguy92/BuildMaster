<?php
// Fonction Instert Amine
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