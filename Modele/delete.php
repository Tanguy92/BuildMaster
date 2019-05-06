<?php
include("Modele/connectBDD.php");

function deleteArticle($s1){
    $bdd = $GLOBALS["bdd"];
    $query = "DELETE FROM `Article` WHERE idProduit = :set1";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1));

        $check = true;
       
    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}





?>