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

function deleteTheme($v1){
    $bdd = $GLOBALS["bdd"];

    try
    {
        $query =  $bdd -> prepare('DELETE FROM `theme` WHERE `idTheme` = :set1');
        $query -> execute(array('set1' => $v1));

    } catch(PDOException $ex)
    {
        die("failed to run the query : ".$ex->getMessage());
    }

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

function deletePanier($s1,$s2){
    $bdd = $GLOBALS["bdd"];
    $query = "DELETE FROM `commande` WHERE idProduit = :set1 AND idMembre = :set2 AND panier LIKE 'true'";
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

    return $check;
}

//REQ ANNIA
// Admin supprime la personne signalée plus de 6 fois
function deleteSignale($u) {
    $bdd = $GLOBALS["bdd"];
    $del = $bdd -> prepare('DELETE FROM `membre` WHERE idMembre = :lui');
    $del -> execute(array('lui' => $u));
}

//Suppression de messages specifiques (id donné)
function deleteMessage($i) {
    $bdd = $GLOBALS["bdd"];
    $mes = $bdd -> prepare('DELETE FROM `messagerie` WHERE idMessagerie = :sa');
    $mes -> execute(array('sa' => $i));
}

//Suppression des articles qui appartient au vendeur qui sera sup
function deleteArticleA($art) {
    $bdd = $GLOBALS["bdd"];
    $ip = $bdd -> prepare('DELETE FROM `article` WHERE idProduit = :aaa');
    $ip -> execute(array('aaa' => $art));

}

//Suppression de la liaison vendeur - article 
function deleteApp($appa) {
    $bdd = $GLOBALS["bdd"];
    $ia = $bdd -> prepare('DELETE FROM `appartenance` WHERE idAppartenance = :ap');
    $ia -> execute(array('ap' => $appa));
}

//Suppression de la liaison vendeur - article 
function deleteNote($appa) {
    $bdd = $GLOBALS["bdd"];
    $ia = $bdd -> prepare('DELETE FROM `notes` WHERE idNotes = :ap');
    $ia -> execute(array('ap' => $appa));
}


function deleteCategorie($v1){
    $bdd = $GLOBALS["bdd"];

    try
    {
        $query =  $bdd -> prepare('DELETE FROM `categorie` WHERE `idCategorie` = :set1');
        $query -> execute(array('set1' => $v1));

    } catch(PDOException $ex)
    {
        die("failed to run the query : ".$ex->getMessage());
    }

}
?>