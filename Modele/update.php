<?php

function updateArticle($s1,$s2,$s3,$s4,$s5,$s6){
    $bdd = $GLOBALS["bdd"];
    if(isset($_POST['modifier'])){
        $idProduit = $_POST['modifier'];
    }elseif (isset($_POST['modifierArticle'])) {
        $idProduit = $_POST["idProduit"];
    }

    $query =
    "UPDATE `article` SET `nom` = :set1, `prix` = :set2, `idCategorie` = :set3, photo = :set4, dateDebut = :set5, dateFin = :set6 WHERE `article`.`idProduit` = $idProduit";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1,
                        ":set2" => $s2,
                        ":set3" => $s3,
                        ":set4" => $s4,
                        ":set5" => $s5,
                        ":set6" => $s6));
        $check = true;
       
    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}

?>