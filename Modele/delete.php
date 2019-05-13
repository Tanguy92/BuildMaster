<?php
include("Modele/connectBDD.php");

function deleteArticleAppartenance($s1){
    $bdd = $GLOBALS["bdd"];
    $query = "DELETE FROM `appartenance` WHERE idProduit = :set1";
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


function deleteArticle($s1){
    $bdd = $GLOBALS["bdd"];
    $query = "DELETE FROM `article` WHERE idProduit = :set1";
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

//Req Annia
function deleteSignale($u) {
    $bdd = $GLOBALS["bdd"];
    $del = $bdd -> prepare('DELETE FROM `membre` WHERE idMembre = :lui');
    $del -> execute(array('lui' => $u));
}

function deleteMessage($i) {
    $bdd = $GLOBALS["bdd"];
    $mes = $bdd -> prepare('DELETE FROM `messagerie` WHERE idMessagerie = :sa');
    $mes -> execute(array('sa' => $i));
}

?>