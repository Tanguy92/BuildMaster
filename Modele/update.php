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

/*function updateDispoArticle(){
    $bdd = $GLOBALS["bdd"];
    if(isset($_POST['ajoutPanier'])){
        $idProduit = $_POST['ajoutPanier'];
    }
    $query =
    "UPDATE `article` SET `dispo` = 'non' WHERE `article`.`idProduit` = $idProduit";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array());

    $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}*/

/*function updateArticlePanier(){
    $bdd = $GLOBALS["bdd"];
    if(isset($_POST['supprimerPanier'])){
        $idProduit = $_POST['supprimerPanier'];
    }
    $query =
    "UPDATE `article` SET `dispo` = 'oui' WHERE `article`.`idProduit` = $idProduit";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array());

    $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}*/

//Fonction pour mettre la dateDebut location à jour si elle est depassée.
function updateDateDebutArticle(){
    $bdd = $GLOBALS["bdd"];
    $query =
    "UPDATE `article` SET `dateDebut` = CURRENT_DATE WHERE dateDebut < CURRENT_DATE";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array());

    $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}


function updateDeletePanier($s1,$s2,$s3,$s4){
    $bdd = $GLOBALS["bdd"];
    $query = "UPDATE commande SET panier = 'false',etat = 'ouverte', dateDebut = :set3, dateFin = :set4 WHERE idProduit = :set1 AND idMembre = :set2 AND panier LIKE 'true'";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array(":set1" => $s1,
                                  ":set2" => $s2,
                                  ":set3" => $s3,
                                  ":set4" => $s4
                                 ));

        $check = true;
       
    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}

function updateFermetureCommande(){
    $bdd = $GLOBALS["bdd"];
    $query =
    "UPDATE `commande` SET `etat` = 'ferme' WHERE dateFin <= CURRENT_DATE";
    try {
        $queries = $bdd -> prepare($query);
        $queries -> execute(array());

    $check = true;

    }catch(PDOException $ex)
    {
        die("Fail : ".$ex);
    }

    return $check;
}

?>