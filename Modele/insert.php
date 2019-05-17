<?php
include("Modele/connectBDD.php");

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

    return $check;
}

function updateTheme(){
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
}
?>

