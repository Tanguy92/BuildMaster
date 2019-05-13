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

    return $check;
}

?>

